@extends('front.base')

@section('content')
<section class="ticket-section section-padding">
    <div class="section-overlay"></div>


    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-10 mx-auto">
                <div class="custom-form ticket-form mb-5 mb-lg-0" >
                    <h2 class="text-center mb-4">Verification de paiement</h2>


                    <p class="text-black">Pour le SH’24 le thème est <b>« Aquis à sa cause »</b> . Cela
                        dit pour participer au SH'24 chaque participant devra de prémunir de :</p>

                </div>
            </div>
        </div>
</section>
<div class="container">

    <form action="." method="post">
        @csrf
        <div class="d-md-flex align-items-center">
            <div class="p-5">
                <img src="{{asset('/images/img.png')}}" alt="">
            </div>
            <h3 class="p-5">
                <p>1 - Effectuez votre paiement sur le numéro wave suivant</p>
                <p>2 - Cliquer sur la transaction pour voir les details</p>
                <p>3 - Entrez dans le champs ci-dessous les 6 premiers caractères de l'ID de la transaction</p>
            </h3>


        </div>
        <div class="my-3 w-50 mx-auto">
            <input type="text" required class="form-control" >
            @if($error) <small class="text-danger">{{ $error }}</small> @endif
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>
    </form>

</div>
@endsection
