<?php


namespace App\Http\Controllers;


use App\Models\Serie;

class DetailsControllers
{
    public function detailSeries($id_s){
        $s = Serie::select('*')->where('id', '=', $id_s);
        return view('detailsSeries',['detailsSeries'=>$s]);
    }
}