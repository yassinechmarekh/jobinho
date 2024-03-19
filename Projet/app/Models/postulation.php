<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postulation extends Model
{
    use HasFactory;
    protected $table = 'postulation';
    protected $fillable = [
        'idCandidat',
        'idAnnonce',
        'Nom',
        'Email',
        'Website',
        'CV',
        'LettreMotivation',

    ];
}
