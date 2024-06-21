@extends('front.base')

@section('content')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>


        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-10 mx-auto">
                    <div class="custom-form ticket-form mb-5 mb-lg-0" >
                        <h2 class="text-center mb-4">Entretient</h2>


                        <p class="text-black">Pour le SH’24 le thème est <b>« Protocole de la royauté »</b> . Cela
                            dit pour participer au SH'23 chaque participant devra de prémunir de :</p>

                    </div>
                </div>
            </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="/_inscription/{{ $participant->id }}/"
                      enctype="multipart/form-data" method="post" role="form">
                    @csrf

                    <div class="ticket-form-body text-center">
                        <div>
                            <h5 class="mb-3">Jour d'entretient</h5>
                            <input type="hidden" name="participant_id" value="{{$participant->id}}">
                            <div class="row mt-3">
                                    @foreach($entretient_days as $day)
                                <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="radio" name="days"
                                                   id="flexRadioDefault{{ $day->id }}" value="{{ $day->id }}">
                                            <label class="form-check-label" for="flexRadioDefault{{ $day->id }}">
                                                {{ $day->label }}
                                            </label>
                                        </div>

                                </div>
                                    @endforeach

                            </div>
                        </div>

                        <div>
                            <h5 class="mb-3">Alimentaires</h5>
                            <div class="row mt-3">
                                    @foreach($foods as $food)
                                <div class="col-lg-4 col-md-4 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="checkbox" multiple name="alimentaires[]"
                                                   id="alimentaire{{ $food->id }}" value="{{ $food->id }}">
                                            <label class="form-check-label" for="alimentaire{{ $food->id }}">
                                                {{ $food->label }}
                                            </label>
                                        </div>
                                </div>
                                    @endforeach
                            </div>
                            @error('alimentaires') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" class="form-control">Suivant</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
