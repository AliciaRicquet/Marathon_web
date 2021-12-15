<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ControllerAccueil extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function accueil()
    {
        return view('accueil');
    }


    public function series(){
        $series = Serie::orderBy('note','desc')->limit(5)->get();

        return view('series', ['series'=>$series]);
    }

    public function inscription(){
        return view('inscription');
    }

    public function store(){

    }

    public function connexion(){
        return view('connexion');
    }
}
