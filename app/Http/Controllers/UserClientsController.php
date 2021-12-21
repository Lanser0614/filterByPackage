<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clients;
use Illuminate\Http\Request;

class UserClientsController extends Controller
{
    public function index(){
        $user = User::find(1);

dd($user->clients);

        // $clients = Clients::with('users')->get();

        // return $clients;
    }
}
