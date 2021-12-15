<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAccueil;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
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

Route::get('/', [ControllerAccueil::class, 'accueil'])->name('accueil');
Route::get('/series', [ControllerAccueil::class, 'series'])->name('series');
Route::get('/inscription', [ControllerAccueil::class, 'inscription'])-> name ('inscription');
Route::get('/inscription', [ControllerAccueil::class, 'store'])-> name('store');
Route::get('/connexion', [ControllerAccueil::class, 'connexion'])-> name('connexion');



//Route::post("/login", );
