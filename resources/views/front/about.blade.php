@extends('front.base')

@push('style')

    <style>
        .valeur-section{
            padding-top: 50px;
            padding-bottom: 50px;
            background: rgb(248,200,46);
            background: radial-gradient(circle, rgba(248,200,46,1) 0%, rgba(248,132,46,1) 100%);
        }
        .valeur-card{
        }
        .card-img {
            backdrop-filter: brightness(15%);
        }
    </style>
@endpush

@section('content')
        <div class="section-overlay"></div>
    <section class="about-section section-padding" id="">
        <div class="container">
            <div class="row mt-5 ">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">Sacerdoce des Héritiers</h2>

                        <p class="mb-30 pera-bottom text-white">Le sacerdoce des héritiers est la première plateforme chrétienne de perfectionnement en leadership.
                            Depuis plusieurs années déjà, nous nous sommes investis dans le secteur de la formation et de l’équipement des individus afin de faire d’eux des leaders confirmés.</p>
                        <p class="mb-30 pera-bottom text-white">Aujourd'hui, un leader doit se définir autrement.
                            Au lieu d’être un simple meneur de troupe théorique, il doit essentiellement être le résultat d’un travail minutieusement conçu sur une longue période.
                            Nous faisons donc transcender le leader d'autrefois de sa simple faculté à diriger à la pratique réelle de l’art du leadership.</p>             <p class="mb-30 pera-bottom text-white">
                            Il s'agit donc de le coacher, le mettre en situation réelle de vie de leader afin de bousculer et exposer cette valeur sûre qui sommeille en lui.
                            Chez nous, au delà de la théorie nous plongeons nos apprenants dans une dimension supérieure du leadership dans laquelle nous brisons des codes et réorganisons grâce à l’empreinte Divine les standards de leurs vocations.
                        </p>
                        <p class="pera-top mb-50 text-white">Nous sommes prêts à faire de vous de véritables leaders en autonomisant vos capacités.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="about-text-wrap">
                        <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/355650885_607857138109305_8453061726351346725_n.jpg?stp=dst-jpg_s600x600&_nc_cat=100&cb=99be929b-59f725be&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeGMCY2T3svvFVeU8JhVepg8HWQVoXgwJVIdZBWheDAlUr9EIeaX0utzQRJ98shli0mblUWUFfZFNCRyUTYRl9Nj&_nc_ohc=kUyEo8v-mMsAX_flpBV&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfBRO99SV5cIg25-iA4Nb85NO5mbbve1m6RoYDcaf7ilKA&oe=64A031D9" class="about-image img-fluid">

                        <div class="about-text-info d-flex">
                            <div class="d-flex">
                                <i class="about-text-icon bi-person"></i>
                            </div>


                            <div class="ms-4">
                                <h3>Pour un héritage inébranlable</h3>

                                <p class="mb-0">Sacerdoce Des Héritiers</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="valeur-section ">
        <div class="bg-black text-white px-4 py-2 w-25">
            <h2 class="d-inline-block text-white">Valeurs</h2>
        </div>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-3 col-12 px-3 text-center">
                    <div class="waw bounceInUp pulse" data-wow-duration="2s" data-wow-delay="1s" style="margin-top: 60px">
                        <img src="/images/vector1.png" height="500" width="300" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-12 px-3 text-center">
                    <div class="waw bounceInUp pulse" data-wow-duration="2s" data-wow-delay="2s" style="margin-top: 120px">
                        <img src="/images/vector2.png" height="500" width="300" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-12 px-3 text-center">
                    <div class="waw bounceInUp pulse" data-wow-duration="2s" data-wow-delay="3s" style="margin-top: 20px">
                        <img src="/images/vector3.png" height="500" width="300" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
