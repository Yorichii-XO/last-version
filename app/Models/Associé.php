<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Associé;
use App\Models\Societe;

class Associé extends Model
{
    use HasFactory;
    protected $table = 'associés';

    protected $fillable = [
        'name',
        'email',
        'cin',
        'role',
        'societe_id'

    ];
    public function user()
{
    return $this->belongsTo(User::class, 'associe_id');
}
public function societe()
{
    return $this->belongsTo(societe::class, 'societe_id');
}

}
