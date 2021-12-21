<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(Request $request){
        $clients = Clients::with('user')->filter($request->all())->get();
        return $clients;
    }
}
