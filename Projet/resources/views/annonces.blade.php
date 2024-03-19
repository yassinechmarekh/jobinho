<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jobinho - Application de Recrutement en ligne</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css" rel="stylesheet')}}">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">Jobinho</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Accueil</a>
                    <a href="/apropos" class="nav-item nav-link">À propos</a>
                    <a href="/categories" class="nav-item nav-link">Catégories</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>

            <div class="navbar-nav ms-auto p-4 p-lg-0 d-flex align-items-center">
                @if (Route::has('login'))
                    @auth
                        @if(auth()->user()->role === 'candidat')
                            <x-nav-link :href="route('dashboard-candidat')" class="nav-item nav-link btn btn-primary rounded-0 py-2 px-3 d-none d-lg-block text-white text-center" style="line-height: 56px;" :active="request()->routeIs  ('dashboard-candidat')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        @elseif(auth()->user()->role === 'recruteur')
                            <x-nav-link :href="route('dashboard-recruteur')" class="nav-item nav-link btn btn-primary rounded-0 py-2 px-3 d-none d-lg-block text-white text-center" style="line-height: 56px;" :active="request()->routeIs('dashboard-recruteur')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        @else
                            <a href="{{ url('/dashboard') }}" class="nav-item nav-link btn btn-primary rounded-0 py-2 px-3 d-none d-lg-block text-white text-center" style="line-height: 46px;">Dashboard</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="nav-item nav-link btn btn-primary rounded-0 py-2 px-3 d-none d-lg-block text-white text-center" style="line-height: 46px;">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item nav-link btn btn-primary rounded-0 py-2 px-3 d-none d-lg-block text-white text-center" style="line-height: 46px;">Inscription</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
        <!-- Navbar End -->



    <!-- Header End -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="/">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Annonce</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->

    @foreach ($Annonces as $item)
    <!-- Job Detail Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gy-5 gx-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center mb-5">
                        <img class="flex-shrink-0 img-fluid border rounded" src="{{url($item -> Image)}}" alt="" style="width: 80px; height: 80px;">
                        <div class="text-start ps-4">
                            <h3 class="mb-3">{{$item -> NomPost}}</h3>
                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item -> Localisation}}</span>
                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$item -> StatutTime}}</span>
                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$item -> Salaire}}</span>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3">Description du poste</h4>
                        <p>{{$item -> DescriptionPost}}</p>
                        <h4 class="mb-3">Responsabilité</h4>
                        <p>
                            En tant que membre clé de notre équipe, vous serez chargé(e) de diverses responsabilités cruciales pour le succès de notre entreprise. Voici un aperçu des tâches qui vous seront confiées :
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> ResponsabilitePost1}}</li>
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> ResponsabilitePost2}}</li>
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> ResponsabilitePost3}}</li>
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> ResponsabilitePost4}}</li>
                        </ul>
                        <h4 class="mb-3">Qualifications</h4>
                        <p>Pour réussir dans ce rôle, nous recherchons un professionnel doté des qualifications suivantes :</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> QualificationPost1}}</li>
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> QualificationPost2}}</li>
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> QualificationPost3}}</li>
                            <li><i class="fa fa-angle-right text-primary me-2"></i>{{$item -> QualificationPost4}}</li>
                        </ul>
                    </div>

                    <div class="">
                        <h4 class="mb-4">Appliquer Maintenant</h4>
                        <form action="{{ route('annonce', ['idAnnonce' => $Annonces[0]->idAnnonce]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Votre Nom" name="nom">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control" placeholder="Votre Email" name="email">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Portfolio Website" name="website">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="file" class="form-control bg-white" name="CV">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" placeholder="Lettre Motivation" name="LettreMotivation"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Postuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Job Summery</h4>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Publié en: {{$item -> DatePublication}}</p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Statut: {{$item -> StatutTime}}</p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Salaire: {{$item -> Salaire}}</p>
                        <p><i class="fa fa-angle-right text-primary me-2"></i>Localisation: {{$item -> Localisation}}</p>
                        <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Dernier Délai: {{$item -> DateLine}}</p>
                    </div>
                    <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                        <h4 class="mb-4">Entreprise Detail</h4>
                        <p class="m-0">{{$item -> EntrepriseDetail}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Detail End -->
    @endforeach



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Entreprise</h5>
                    <a class="btn btn-link text-white-50" href="/apropos">A propos</a>
                    <a class="btn btn-link text-white-50" href="/contact">Contact</a>
                    <a class="btn btn-link text-white-50" href="/erreur">Services</a>
                    <a class="btn btn-link text-white-50" href="/erreur">Politique de confidentialité</a>
                    <a class="btn btn-link text-white-50" href="/erreur">Termes & Conditions</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Liens Rapides</h5>
                    <a class="btn btn-link text-white-50" href="/acceuil">Acceuil</a>
                    <a class="btn btn-link text-white-50" href="/apropos">A propos</a>
                    <a class="btn btn-link text-white-50" href="/categories">Categories</a>
                    <a class="btn btn-link text-white-50" href="/contact">Contact</a>
                    <a class="btn btn-link text-white-50" href="">Connection & Inscription</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contact</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Maroc, Casablanca</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 123 456 789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>jobinho@info.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>
                        Restez informé des dernières offres d'emploi et des actualités du marché du travail.
                    </p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Inscription</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="/">Jobinho</a>, All Right Reserved.


                        Made By <a class="border-bottom" href="/erreur">Team hna</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="/">Home</a>
                            <a href="/erreur">Cookies</a>
                            <a href="/erreur">Help</a>
                            <a href="/erreur">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
