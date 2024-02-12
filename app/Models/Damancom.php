<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Societe;

class Damancom extends Model
{
    use HasFactory;
    protected $fillable = [
        'societe_id', 'login', 'password',
    ];
    public function societe()
    {
        return $this->belongsTo(Societe::class);
    }
}
