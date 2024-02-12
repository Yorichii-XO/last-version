<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Societe;

class Gerant extends Model
{
    protected $table = 'gerants';

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'cin',
        'role',
        'societe_id'
    ];
    public function societe()
{
    return $this->belongsTo(Societe::class, 'societe_id');
}
}
