<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Societe;

class Cimr extends Model
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
