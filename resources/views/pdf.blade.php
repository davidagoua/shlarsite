<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sacerdoce des Héritiers - S'24</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/templatemo-festava-live.css" rel="stylesheet">
</head>
<body>
    <div id="section-pdf" class="p-3 border rounded m-3">
    <div class="text-center">
        <img src="/images/shlogo.png" width="100" alt="">
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3 col-12">
            <div>
                <img src="{{ asset('storage/'.$participant->cni) }}" class="w-100 img-responsive" height="50" width="70" alt="">
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
                <b class="col-12 col-md-4">Jour d'entretient</b>
                <i class="col">07 Août 2024</i>
            </p>
            <p>
                <b>Motivation</b> <br>
            <div class="ml-5">
                {{ $participant->motivation }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
