<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAccueil;
use App\Http\Controllers\DetailsControllers;
use App\Http\Controllers\SeriesControllers;
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

Route::get('/',[Controller::class, 'accueil'])->name('accueil');
Route::get('/series', [SeriesControllers::class, 'series'])->name('series');
Route::get('/detailsSerie/{id}', [DetailsControllers::class, 'detailSeries'])->name('detailsSerie');
Route::resource('utilisateur', '\App\Http\Controllers\ControlleurUser');


//Route::post("/login", );
