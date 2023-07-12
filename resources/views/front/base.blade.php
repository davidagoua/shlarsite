<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sacerdoce des Héritiers - S'23</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/templatemo-festava-live.css" rel="stylesheet">
    <link type="favicon" rel="shortcut icon" href="{{ asset('/images/shlogo.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    @stack('style')
</head>

<body>

<main>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                Sacerdoce des Héritiers
            </a>

            <a href="{{ route('inscription') }}" class="btn custom-btn d-lg-none ms-auto me-4">Participer</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll @if(request()->is('home')) active @endif " href="/#section_1">Acceuil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll @if(request()->is('about')) active @endif"
                           href="{{ route('about') }}">Qui sommes-nous ?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll @if(request()->is('activites')) active @endif"
                           href="{{ route('activites') }}">Activités</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#section_6">Devenir Partenaire</a>
                    </li>
                </ul>

                <a href="{{ route('inscription') }}" class="btn custom-btn d-lg-block d-none">Participer</a>
            </div>
        </div>
    </nav>


    @yield('content')
</main>


<footer class="site-footer">
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mt-5">
                    <p class="copyright-text">Copyright © 2023 Sacerdoce des Héritiers</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new WOW({
        'boxClass': 'waw',
    }).init();

    // New Promise-based usage:
    const build_pdf = () => {

        var element = document.querySelector('#section-pdf');
        var opt = {
            margin: 3,
            filename: 'preinscription-s23.pdf',
            image: {type: 'jpeg', quality: 0.98},
            pagebreak: {mode: ['css', 'legacy']},
            html2canvas: {scale: 1, useCORS: true},
            jsPDF: {unit: 'in', format: 'letter', orientation: 'l'}
        };

        console.log('record...')
        html2pdf().set(opt).from(element).save();
        //html2pdf(element, opt);
    }
</script>

@stack('js')

<!-- JAVASCRIPT FILES -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/click-scroll.js"></script>
<script src="/js/custom.js"></script>

</body>

</html>
