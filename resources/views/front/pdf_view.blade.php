<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                <img src="/storage/public/{{$participant->cni}}" class="w-100" alt="">
            </div>
            <div class="mt-2">
                {{ $participant->uid }}
            </div>
            <div class="mt-2 d-flex flex-column align-items-center">
                <img src="{{ asset('images/wave.png') }}" width="45" class="m2-2 img-responsive" alt="">
                <div class="flex-1">
                    <span>Payer par wave</span><br>
                    0101495342
                </div>
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
        </div>
    </div>
</div>


<script>
    window.onload = function () {
        const element = document.getElementById('section-pdf');
        const opt = {
            margin: 0.5,
            filename: 'myfile.pdf',
            image: {type: 'jpeg', quality: 0.98},
            html2canvas: {scale: 2},
            jsPDF: {unit: 'in', format: 'letter', orientation: 'portrait'}
        };
        html2pdf().set(opt).from(element).save().then(function () {
            document.location.href = "{{ route('home') }}";
        })


    }
</script>
</body>
</html>


