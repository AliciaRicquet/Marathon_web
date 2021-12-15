<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerUser;
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

Route::get('/', [Controller::class, 'accueil'])->name('accueil');
Route::get('/series', [Controller::class, 'series'])->name('series');
Route::resource('utilisateur', '\App\Http\Controllers\ControlleurUser');

//Route::post("/login", );
