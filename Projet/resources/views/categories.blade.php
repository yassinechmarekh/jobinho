@extends('Layouts.master')

@section('content')
    <!-- Header End -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Catégories</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Catégories</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


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
    <!-- Category End -->


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



@endsection
