<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    protected $fillable = [
        'idRecruteur',
        'user_id',
        'NomEntrprise',
    ];
    use HasFactory;
}
