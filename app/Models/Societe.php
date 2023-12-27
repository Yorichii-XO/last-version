<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'formes_juridique',
        'siege_social',
        'capital',
        'activite_principal',
        'rc',
        'patente', 
        'if', 
        'cnss', 
        'ice', 
        'rib', 
        'date_exploitation',
        'date_debut_exploitation',  

    ];
}
