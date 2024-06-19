@extends('front.base')

@section('content')
    <section class="ticket-section section-padding">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                        <h2 class="text-center mb-4">Informations relatives au stage 2024</h2>

                        <p class="text-black">Pour le sacerdoce des héritiers la notion de stage fait référence à des instants de retraites
                            qui se déroulent durant une période bien définie hors de nos zones de confort.</p>
                        <p class="text-black">En effet, pour nous, un leader a besoin d’être mis en situation de vie réelle, genoux fléchi et cœur
                            ouvert à la  pensé de Dieu. Ces retraites sont ouvertes à toutes personnes entre 15
                            et 35 ans aspirant à vivre des expériences inspirées pour lui donner un charisme de leader.</p>
                        <p class="text-black">Nous partons résider sur un site qui répond aux exigences pour le façonnement des
                            leaders à la manière SH. Nous avons notre propre politique de perfectionnement en leadership à
                            travers des enseignements requis, des enseignants ressources suffisamment rodés dans leurs domaines.</p>
                        <p class="text-black">Avec un calendrier vraiment chargé en activités, notre programme tourne autour d’un thème bien défini à chaque Edition.</p>
                        <p class="text-black">Ainsi pour le SH’24 le thème est <b>« Le protocole de la royauté »</b> . Cela dit pour participer au SH'24 chaque participant devra de prémunir de :</p>
                        <ul class="text-black">
                            <li>Vivres pouvant vous permettre de tenir le coup pendant votre séjour
                                <br> (riz,huile,poisson frais ou fumé,plaquettes d'oeufs, brpoulets... et conserves de tous genres,quaker
                                ,spaghetti, <br>pain,lait,sucre,café,thé,céréales,ect...)</li>
                            <li>Non-vivres (savon de bain, de lessive, poudre à laver) detergeant, papier hygiénique,ect...</li>
                            <li>Drap, manteau, couvre lit et toute autre forme de literie qualifiée nécéssaire.</li>
                            <li>Vêtements lourds capablent de d'amortir l'impact d'un froid avilissant</li>
                            <li>D'une bible ou d'un bloc-note ou de quoi prendre note</li>
                            <li>D'une tenue de sport avec des chaussures fermées capables de pratiquer n'importe quel terrain</li>
                            <li>D'un pantalon Jeans bleu ou noir au moins dans sa garde robe.</li>
                        </ul>
                    </form>
                </div>
            </div>
    </section>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-10 mx-auto">
                    <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('inscription') }}" enctype="multipart/form-data" method="post" role="form">
                        @csrf
                        <h2 class="text-center mb-4">S'inscrire</h2>

                        <div class="ticket-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="">Nom</label>
                                    <input required type="text" name="nom" class="form-control">
                                    @error('nom') <span class="text-danger"> {{ $message }}</span>@enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                        <label for="">Prénoms</label>
                                        <input required type="text" name="prenoms" class="form-control">
                                        @error('prenoms') <span class="text-danger"> {{ $message }}</span>@enderror

                                </div>
                            </div>

                            <div>
                                <label for="">Numéro de téléphone</label>
                                <input required type="phone" class="form-control" name="contact">
                                @error('contact') <span class="text-danger"> {{ $message }}</span>@enderror
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="">Date de naissance</label>
                                    <input type="date" name="date_naissance" class="form-control">
                                    @error('date_naissance') <span class="text-danger"> {{ $message }}</span>@enderror
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <label for="">Lieu de naissance</label>
                                    <input required type="text" name="lieu_naissance" class="form-control">
                                    @error('lieu_naissance') <span class="text-danger"> {{ $message }}</span>@enderror

                                </div>
                            </div>

                            <div>
                                <span>Situation Matrimoniale</span>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="radio" name="matrim"
                                                   id="flexRadioDefault1" value="marie">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Marié
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="matrim"
                                                   id="flexRadioDefault2" value="celibataire">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Celibataire
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="matrim"
                                                   id="flexRadioDefault3" value="concubinage">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Concubinage
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="matrim"
                                                   id="flexRadioDefault4" value="autres">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Autre
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Ville habitée</label>
                                        <input class="form-control valid" name="quartier" id="name" required  placeholder="Entrez votre ville">
                                        @error('ville') <small class="red-text">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Commune habitée</label>
                                        <input class="form-control valid" name="commune" id="email" type="text" required  placeholder="Entrez votre commune">
                                        @error('commune') <small class="red-text">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                            </div>



                            <div>
                                <label for="">Photo d'identité</label>
                                <input type="file" name="cni" id="ticket-form-number"
                                       class="form-control" required>
                            </div>

                            <div>
                                <label for=""> Lettre de motivation</label>
                            <textarea name="motivation" rows="3" class="form-control"
                                      id="ticket-form-message" placeholder="Pourquoi désirez-vous participer au S'23 ?"></textarea>
                            </div>

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <button type="submit" class="form-control">Suivant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
