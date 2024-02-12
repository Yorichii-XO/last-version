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
        'mode',
        'date_debut_exploitation',  

    ];
    public function gerants()
    {
        return $this->hasMany(Gerant::class);
    }
    public function associes()
{
    return $this->hasMany(Associé::class);
}
public function impots()
{
    return $this->hasOne(Impot::class);
}
public function regus()
{
    return $this->hasOne(Regus::class);
}
public function damancoms()
{
    return $this->hasOne(Damancom::class);
}
public function cimrs()
    {
        return $this->hasMany(Cimr::class);
    }
}
