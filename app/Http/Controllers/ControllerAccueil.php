<?php

namespace App\Http\Controllers;

use App\Models\Serie;

class ControllerAccueil extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }


    public function series(){
        $series = Serie::orderBy('note','desc')->limit(5)->get();

        return view('series', ['series'=>$series]);
    }
}
