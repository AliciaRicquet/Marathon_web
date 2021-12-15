<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAccueil;
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

Route::get('/', [ControllerAccueil::class, 'accueil'])->name('accueil');
Route::get('/series', [ControllerAccueil::class, 'series'])->name('series');

//Route::post("/login", );
