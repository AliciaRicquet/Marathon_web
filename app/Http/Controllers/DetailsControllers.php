<?php


namespace App\Http\Controllers;


use App\Models\Serie;

class DetailsControllers
{
    public function detailSeries($id_s){
        $s = Serie::find($id_s);
        return view('detailsSerie',['detailsSeries'=>$s]);
    }
}