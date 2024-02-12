<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Associé;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'location',
        'about_me',
        'role', 

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    use Notifiable;

    // ... existing code ...

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    public function damancom()
    {
        return $this->hasOne(Damancom::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function associe()
{
    return $this->hasOne(Associé::class, 'associe_id');
}

public function isOnline()
    {
        return cache()->has('user-is-online-' . $this->id);
    }

}
