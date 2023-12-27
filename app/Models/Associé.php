<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Associé;

class Associé extends Model
{
    use HasFactory;
    protected $table = 'associés';

    protected $fillable = [
        'name',
        'email',
        'cin',
        'role',
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'associe_id');
}

}
