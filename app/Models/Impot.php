<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Societe;

class Impot extends Model
{
    use HasFactory;
    protected $fillable = [
        'societe_id', 'login', 'password','code_acce'
    ];
    public function societe()
{
    return $this->belongsTo(Societe::class, 'societe_id');
}
}
