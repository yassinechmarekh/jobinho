<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruteurDashboardController extends Controller
{
    public function index()
    {
        // Logique pour afficher le tableau de bord des recruteurs
        return view('dashboard.dashboard-recruteur');
    }
    public function profile()
    {
        return view('dashboard.ProfileRecruteur');
    }
    public function ListeCandidat()
    {
        return view('dashboard.ListeCandidat');
    }
    public function CreateAnnonce()
    {
        return view('dashboard.CreateAnnonce');
    }
    public function ListeAnnonce()
    {
        return view('dashboard.ListeAnnonce');
    }
}
