<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UserClientsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user', [UserController::class, 'index']);
Route::get('/clients', [ClientsController::class, 'index']);
Route::get('/pivot', [UserClientsController::class, 'index']);
