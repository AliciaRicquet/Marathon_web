<?php


namespace App\Http\Controllers;


use App\Models\Serie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DetailsControllers
{
    public function detailSeries($id_s){
        $s = Serie::find($id_s);
        return view('detailsSerie',['detailsSeries'=>$s]);
    }


}