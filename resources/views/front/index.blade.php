@extends('front.base')

@section('content')
    <section class="hero-section" style="min-height: 100vh" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <small>
                        <img width="90" src="{{ asset('/images/shlogo.png') }}" alt="">
                    </small>

                    <h1 class="text-white mb-5">Stage 2024</h1>

                    <a class="btn custom-btn smoothscroll" href="{{ route('inscription') }}">Préinscription</a>
                </div>

                <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                    <div class="date-wrap">
                        <h5 class="text-white">
                            <i class="custom-icon bi-clock me-2"></i>
                            14 - 30 Août, 2024
                        </h5>
                    </div>

                    <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            Challenge City
                        </h5>
                    </div>

                    <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3">Partager:</span>

                            <li class="social-icon-item">
                                <a href="https://web.facebook.com/sacerdocedesheritiers/" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/sacerdoce_des_heritiers/" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="video/teaser.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col">
                <img src="" alt="">
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="row">
            <div class="col-12 col-md-7">
                <img class="img-fluid rounded"
                     src="{{ asset('images/affiche.png') }}"
                     alt="">
            </div>
            <div class="col-12 col-md-5">
                <div class="text-center h-100 shadow" style="border: 3px solid red">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div>
                            <h1 id="counter_jour"></h1> <h4>jours</h4><br>
                            <h1 id="counter"></h1>
                            <div id="attendee_loading" style="display: none">Loading</div>
                            <form id="attendee_email" class="mt-3 d-flex m-1">
                                <input id="email" style="background-color: #eee" type="email"
                                       class="form-control rounded-0 p-1  border-0"
                                       placeholder="Entre votre adresse mail">
                                <button onclick="registerForNewsletter" style="background-color: #FC9C20"
                                        class="btn btn-sm text-white rounded-0">Me prevenir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" p-0 m-0" style="background-color: black">
        <div class="container p-5">
            <div>
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list text-center">
                            <li class="splide__slide">
                                <img width="300" style="max-height: 100vh"
                                     src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/355708240_609671521261200_666642801282529065_n.jpg?_nc_cat=109&cb=99be929b-59f725be&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeF7neAUFQPLa2u-uliAb7Ca6eVBHGIrluPp5UEcYiuW4yVAnNp74XRnaWJWNPdlHrobRVz-_K2GosBP5CoOeEge&_nc_ohc=aUEweyxLHysAX9jNKfp&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfDyY3uwgExdVCEYALSprm3Kp9PAhgc4a2-_kkjL-E4N3w&oe=64ADE3A0"
                                     alt="">
                            </li>
                            <li class="splide__slide">
                                <img width="300"
                                     src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/355494404_609671511261201_1338165406295778753_n.jpg?_nc_cat=108&cb=99be929b-59f725be&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeFl8dUdZZIlfrSuwNes_4JmIgKcoVfAb-kiApyhV8Bv6THgzh12qrc2dwIMEvE3m0tYKRytWGnh0iwQC0Vximvy&_nc_ohc=vDSPXqSEyC4AX_gvRmM&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBGa8HXSZZ9devdPCBarkUZP6xa7qZ4OnFKx2cYRUwugQ&oe=64A144C7"
                                     alt="">
                            </li>
                            <li class="splide__slide">
                                <img width="300"
                                     src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/356237870_609671587927860_7114096040873986710_n.jpg?_nc_cat=101&cb=99be929b-59f725be&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeGVCODR8qzx4S2ph4lofxtMeTjykyFVMFJ5OPKTIVUwUr2T6MpC_2iT6N9L0872mbtmEYU_qp2O_RvLCFu8D32d&_nc_ohc=dMdg0y_58c0AX94S_xY&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfA5O_l5H5erMi6D8KTaMAle7Hd4FV5X6caktkDguC9voQ&oe=64A10054"
                                     alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(false)

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Voulez-vous associer votre image au S'23</h2>


                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                 aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                      role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="contact-name" id="contact-name"
                                                       class="form-control" placeholder="Nom" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="contact-email" id="contact-email"
                                                       pattern="[^ @]*@[^ @]*" class="form-control"
                                                       placeholder="Adresse Email" required>
                                            </div>
                                        </div>

                                        <input type="text" name="contact-company" id="contact-company"
                                               class="form-control" placeholder="Structure" required>

                                        <textarea name="contact-message" rows="3" class="form-control"
                                                  id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control bg-danger">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                 aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

@endsection

@push('js')
    <script>

        const registerForNewsletter = async () => {
            console.log('begin...')
            var email = document.querySelector("#attendee_email")

            try {
                document.querySelector('#attendee_loading').style.display = 'block'
                var response = await (await fetch('/attendee_email', {
                    method: "POST",
                    body: new FormData(email),
                    headers: new Headers({'Content-Type': 'application/json'})
                })).json()
                console.log(response)
            } catch (e) {
                console.error("fetch error: " + e)
            } finally {
                document.querySelector('#attendee_loading').style.display = 'none'
            }
        }

        // Set the date we're counting down to
        var countDownDate = new Date("Aug 14, 2024 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("counter").innerHTML = +hours + ":"
                + minutes + ":" + seconds

            document.getElementById("counter_jour").innerHTML = days;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);

        var splide = new Splide('.splide', {
            autoScroll: true,
            drag: 'free',
            type: 'fade',
            rewind: true,
        });
        splide.mount();
    </script>
@endpush
