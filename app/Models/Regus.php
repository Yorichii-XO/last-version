<?php

namespace App\Models;
use App\Models\Societe;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regus extends Model
{
    use HasFactory;
    protected $fillable = [
        'login',
        'password',
        'societe_id',
    ];

    public function societe()
{
    return $this->belongsTo(Societe::class);
}

}
