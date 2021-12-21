<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory, Filterable;

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function users(){
    //     return $this->belongsToMany(User::class, 'user_clients');
    // }

}
