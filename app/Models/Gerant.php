<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    protected $table = 'gerants';

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'cin',
        'role',
    ];
}
