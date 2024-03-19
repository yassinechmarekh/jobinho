@extends('Layouts.master')

@section('content')
    <!-- Header End -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">A Propos</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Apropos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


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

@endsection
