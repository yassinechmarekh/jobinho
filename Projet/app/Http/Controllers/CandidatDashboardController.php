<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatDashboardController extends Controller
{
    public function index()
    {
        // Logique pour afficher le tableau de bord des candidats
        return view('dashboard.dashboard-candidat');
    }
}
