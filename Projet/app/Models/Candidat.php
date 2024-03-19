<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = [
        'idCandidat',
        'user_id',
        'Prenom',
        'NiveauEtude',
    ];
    use HasFactory;
}
