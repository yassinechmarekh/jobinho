@extends('layouts.master')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4" style="font-size: 3.5rem">Trouvez l'Emploi Parfait Que Vous Méritez</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Postulez en quelques clics et suivez l'avancement de votre candidature. </br>Inscrivez-vous dès aujourd'hui sur Jobinho et trouvez le job de vos rêves !</p>
                                <a href="/register" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chercher Un Emploi</a>
                                <a href="/register" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Trouver Un Talent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4" style="font-size: 3.5rem">Trouvez l'Emploi Parfait Que Vous Méritez</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Postulez en quelques clics et suivez l'avancement de votre candidature. </br>Inscrivez-vous dès aujourd'hui sur Jobinho et trouvez le job de vos rêves !</p>
                                <a href="/register" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chercher Un Emploi</a>
                                <a href="/register" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Trouver Un Talent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0" placeholder="Keyword" />
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0">
                                <option selected>Catégories</option>
                                @foreach ($Categories as $item)
                                    <option value="3">{{$item -> NomCategorie}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0">
                                <option selected>Localisation</option>
                                @foreach ($Annonces as $item)
                                    <option value="1">{{$item -> Localisation}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="#joblist"><button class="btn btn-dark border-0 w-100">Chercher</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explorer Par Catégorie</h1>
            <div class="row g-4">
                <?php $i = 0.1; ?>
                @foreach ($Categories as $item)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="{{$i}}s">
                        <a class="cat-item rounded p-4" href="/detailcategorie/{{$item->idCategorie}}">
                            <i class="{{$item -> IconCategorie}}"></i>
                            <h6 class="mb-3">{{$item -> NomCategorie}}</h6>
                        </a>
                    </div>
                    <?php $i += 0.2; ?>
                @endforeach
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary py-3 px-5 wow fadeInUp" data-wow-delay="1.4s" href="/categories">Parcourir Plus</a>
    </div>
    <!-- Category End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100" src="img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100" src="img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Nous Facilitons l'Obtention du Meilleur Emploi et la Découverte de Talents</h1>
                    <p class="mb-4">Notre engagement est de fournir des solutions innovantes pour vous aider à trouver le meilleur emploi et à découvrir des talents exceptionnels. Temporairement, nous sommes là pour vous guider avec expertise, en mettant en avant vos compétences et en facilitant la recherche de talents exceptionnels.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Assistance personnalisée dans la recherche d'emploi</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Identification des talents uniques pour les entreprises</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Conseils professionnels pour optimiser votre carrière</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="/apropos">Lire Plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Jobs Start -->
    <div class="container-xxl py-5" id="joblist">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Offres d'Emploi</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <h6 class="mt-n1 mb-0">À la une</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <h6 class="mt-n1 mb-0">À temps plein</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <h6 class="mt-n1 mb-0">À temps partiel</h6>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        @foreach ($Annonces as $item)
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{$item -> Image}}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{$item -> NomPost}}</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item -> Localisation}}</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$item -> StatutTime}}</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$item -> Salaire}}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="/annonces/{{$item -> idAnnonce}}">Appliquer Maintenant</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Dernier Délai: {{$item -> DateLine}}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <a class="btn btn-primary py-3 px-5" href="/categories">Parcourir Plus</a>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        @foreach ($Annonces as $item)
                            @if($item -> StatutTime == 'À temps plein')
                                <div class="job-item p-4 mb-4">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{$item->Image}}" alt="" style="width: 80px; height: 80px;">
                                            <div class="text-start ps-4">
                                                <h5 class="mb-3">{{$item->NomPost}}</h5>
                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->Localisation}}</span>
                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$item->StatutTime}}</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$item->Salaire}}</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                                <a class="btn btn-primary" href="/annonces/{{$item -> idAnnonce}}">Appliquer Maintenant</a>
                                            </div>
                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Dernier Délai: {{$item->DateLine}}</small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <a class="btn btn-primary py-3 px-5" href="/categories">Parcourir Plus</a>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        @foreach ($Annonces as $item)
                            @if($item -> StatutTime == 'À temps partiel')
                                <div class="job-item p-4 mb-4">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{$item->Image}}" alt="" style="width: 80px; height: 80px;">
                                            <div class="text-start ps-4">
                                                <h5 class="mb-3">{{$item->NomPost}}</h5>
                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->Localisation}}</span>
                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$item->StatutTime}}</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$item->Salaire}}</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                                <a class="btn btn-primary" href="/annonces/{{$item -> idAnnonce}}">Appliquer Maintenant</a>
                                            </div>
                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Dernier Délai: {{$item->DateLine}}</small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <a class="btn btn-primary py-3 px-5" href="/categories">Parcourir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jobs End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="text-center mb-5">Avis de notre Clients!!!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Grâce à Jobinho, j'ai trouvé le job parfait qui correspond à mes attentes. Professionnalisme et efficacité au rendez-vous!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Zakaria Draoui</h5>
                            <small>Développeur Web</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Jobinho a été notre partenaire clé pour recruter des talents exceptionnels. Service de qualité irréprochable, résultats concrets et remarquable.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Ilyes Chetti</h5>
                            <small>Directeur de ProgEvolve</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Jobinho a rendu ma recherche d'emploi plus facile que jamais. Merci pour cette opportunité de carrière exceptionnelle! Support inestimable, résultats concrets.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Youssef El Motie</h5>
                            <small>Ingénieure en informatique</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Jobinho a su trouver le candidat idéal pour notre entreprise. Nous sommes impressionnés par leur professionnalisme et leur efficacité.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Amine Aboulfath</h5>
                            <small>Directeur des Ressources Humaines</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



@endsection
