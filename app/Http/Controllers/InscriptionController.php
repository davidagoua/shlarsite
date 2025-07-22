<?php

namespace App\Http\Controllers;

use App\Models\EntretientDay;
use App\Models\Food;
use App\Models\FoodParticipant;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;


class InscriptionController extends Controller
{
    public function index(Request $request, Participant $participant = null)
    {
        if ($participant == null) {
            return redirect()->route('validate_wave');
        }

        if($request->isMethod('POST')){
            $request->validate([
                'contact'=>'required|unique:participants'
            ]);

            $participant = $participant->fill($request->all());
            $participant->cni = $request->file('cni')->store('public/participants','public');
            $participant->uid = "#SH20.25-".now()->format('dmH')."-".strtoupper(Str::random(5))."".substr($participant->nom, 0, 1);
            $participant->save();

            $request->session()->flash('success', 'Inscription effectuée, votre dossier sera evalué.');
            return redirect()->route('pdfsection', ['participant'=>$participant->id]);
        }
        return view('front.inscription');
    }

    public function validate_wave(Request $request)
    {
        $error = null;
        if($request->isMethod('POST')){
            $request->validate([
                'idtransaction'=>'required'
            ]);

            $participant = Participant::query()->firstWhere(['uid'=> strtoupper($request->idtransaction)]);

            if($participant){
                return redirect()->route('inscription', ['participant'=>$participant->uid]);
            }
            $error = "La transaction n'existe pas.";

        }
        return view('front.validate-wave', ['error'=>$error]);
    }

    public function choix(Request $request, Participant $participant)
    {
        if($request->isMethod('post')){
            $request->validate([
                'alimentaires'=>'required|min:2'
            ]);
            $participant->jour_entretient()
                ->associate(EntretientDay::query()
                    ->firstWhere(['id'=>$request->input('days')]));
            $participant->save();
            $foods = [];
            foreach ($request->input('alimentaires') as $food_id) {
                $foods[] = new FoodParticipant([
                    'food_id'=> $food_id,
                    'participant_id'=> $request->input('participant_id')
                ]);
            }

            $participant->foods()->saveMany($foods);
            return redirect()->route('pdfsection', ['participant'=>$participant->id]);
        }

        return view('front.choix',[
            'entretient_days' => EntretientDay::disponibles()->get(),
            'foods'=> Food::disponible()->get(),
            'participant'=>$participant
        ]);
    }

    public function pdfsection(Request $request, Participant $participant)
    {
        return view('front.pdf', [
            'participant'=>$participant
        ]);
    }

    public function pdf(Request $request, Participant $participant)
    {
        $pdf = Pdf::loadView('pdf', [
            'participant'=>$participant
        ]);
        return $pdf->download('reçu_preinscription.pdf');
    }

    public function about()
    {
        return view('front.about');
    }

    public function activites()
    {
        return view('front.activites');
    }
}
