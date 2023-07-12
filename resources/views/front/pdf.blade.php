@extends('front.base')

@section('content')

    <section id="presentation-bar" class="ticket-section section-padding">
        <div class="section-overlay"></div>


        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-10 mx-auto">
                    <div class="custom-form ticket-form mb-5 mb-lg-0" >
                        <h2 class="text-center mb-4">Préinscription effectuée</h2>
                        <p class="text-black">Veuillez télécharger le <b><a href="#section-pdf">pdf</a></b> ci dessous et le garder précieusement pour le jour de votre entretient</p>

                    </div>
                </div>
            </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-10 mx-auto">
                <div id="section-pdf" class="p-3 border rounded m-3">
                    <div class="text-center">
                        <img src="/images/shlogo.png" width="100" alt="">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <div>
                                <img src="{{ asset('storage/'.$participant->cni) }}" class="w-100" alt="">
                            </div>
                            <div class="mt-2">
                                {{ $participant->uid }}
                            </div>
                            <div class="mt-2">
                                Contact Wave: 0101495342
                            </div>
                        </div>
                        <div class="col-md-9 col-12"x>
                            <p class="row">
                                <b class="col-12 col-md-4">Nom:</b>
                                <i class="col">{{ $participant->nom }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Prénoms:</b>
                                <i class="col">{{ $participant->prenoms }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Date de naissance:</b>
                                <i class="col">{{ $participant->date_naissance }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Lieu de naissance:</b>
                                <i class="col">{{ $participant->lieu_naissance }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Contact</b>
                                <i class="col">{{ $participant->contact }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Ville</b>
                                <i class="col">{{ $participant->quartier }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Quartier</b>
                                <i class="col">{{ $participant->commune }}</i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Aliment Requis</b>
                                <i class="col">
                                @foreach($participant->foods as $food)
                                   <span>{{ $food->food->label }}</span>
                                @endforeach
                                </i>
                            </p>
                            <p class="row">
                                <b class="col-12 col-md-4">Jour d'entretient</b>
                                <i class="col">{{ $participant->jour_entretient->label }}</i>
                            </p>
                            <p>
                                <b>Motivation</b> <br>
                                <div class="ml-5">
                                    {{ $participant->motivation }}
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3">
                    <button onclick="build_pdf()" class="btn custom-btn ">Imprimer</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const build_pdf = () => {
            document.location.href = '{{ route('pdfview', ['participant'=>$participant]) }}';
        }
    </script>

@endsection
