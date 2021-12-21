<?php

namespace App\Models;

use EloquentFilter\Filterable;
use App\ModelFilters\UserFilter;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use Filterable;

    // public function modelFilter()
    // {
    //     return $this->provideFilter(\App\ModelFilters\UserFilter::class);
    // }

    public function clients(){
        return $this->hasMany(Clients::class);
    }

    // public function clients(){
    //     return $this->belongsToMany(Clients::class, 'user_clients');
    // }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
