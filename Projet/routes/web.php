<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CandidatDashboardController;
use App\Http\Controllers\RecruteurDashboardController;



Route::get('/', function () {
    $result = DB::table('Categories')->get();
    $annonces = DB::table('Annonces')->get();
    return view('acceuil', ['Categories' => $result, 'Annonces' => $annonces]);
});

Route::get('/apropos', function () {
    return view('apropos');
});


Route::get('/categories', function () {
    $result = DB::table('Categories')->get();
    $annonces = DB::table('Annonces')->get();
    return view('categories', ['Categories' => $result, 'Annonces' => $annonces]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/erreur', function () {
    return view('404erreur');
});

Route::get('/annonces/{idAnnonce}', function ($idAnnonce) {
    $annonces = DB::table('Annonces')-> where("idAnnonce",$idAnnonce)->get();
    return view('annonces', ['Annonces' => $annonces]);
})->name('annonces');


Route::post('/annonces/{idAnnonce}', [ProfileController::class, 'annonce'])->name('annonce');


Route::get('/detailcategorie/{idCategorie}', function ($idCategorie) {
    $annonces = DB::table('Annonces')-> where("idCategorie",$idCategorie)->get();
    return view('detailcategorie', ['Annonces' => $annonces]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth','role:candidat'])->group(function () {
    Route::get('/dashboard-candidat', [CandidatDashboardController::class, 'index'])->name('dashboard-candidat');
});

Route::middleware(['auth','role:recruteur'])->group(function () {
    Route::get('/dashboard-recruteur', [RecruteurDashboardController::class, 'index'])->name('dashboard-recruteur');
    Route::get('/dashboard-recruteur/ProfileRecruteur', [RecruteurDashboardController::class, 'profile'])->name('ProfileRecruteur');
    Route::get('/dashboard-recruteur/ListeCandidat', [RecruteurDashboardController::class, 'ListeCandidat'])->name('ListeCandidat');
    Route::get('/dashboard-recruteur/CreateAnnonce', [RecruteurDashboardController::class, 'CreateAnnonce'])->name('CreateAnnonce');
    Route::get('/dashboard-recruteur/ListeAnnonce', [RecruteurDashboardController::class, 'ListeAnnonce'])->name('ListeAnnonce');
});


