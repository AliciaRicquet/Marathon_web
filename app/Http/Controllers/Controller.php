<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function accueil()
    {
        return view('accueil');
    }

    public function series()
    {
        //$series = Serie::all();

        $series = Serie::where('genre', 'Crime')->orderBy('nom')->get();

        return view('series', ['series'=>$series]);
    }

}
