<?php

namespace App\Models;



class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'login',
        'password',
    ];
}
