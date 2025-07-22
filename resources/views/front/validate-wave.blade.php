@extends('front.base')

@section('content')
<div>

    <form action="." method="post">
        @csrf
        <div class="d-flex">
            <img src="{{asset('/images/img.png')}}" alt="">
            <div>
                <p>1 - Effectuez votre paiement sur le numéro wave suivant</p>
                <p>2 - Cliquer sur la transaction pour voir les details</p>
                <p>3 - Entrez dans le champs ci-dessous les 6 premiers caractères de l'ID de la transaction</p>
            </div>


        </div>
        <div class="my-3">
            <input type="text" required class="form-control" >
        </div>
    </form>

</div>
@endsection
