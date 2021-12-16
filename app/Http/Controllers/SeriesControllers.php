<?php


namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Serie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class SeriesControllers extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function series(){
        $series = Serie::all();
        return view('series',['series'=>$series]);
    }

    public function commenter(Request  $request) {
        $comment = new Comment();
        $comment->content= $request->input("content");
        "note",
        "validated" = 0,
        "user_id" Auth::id(),
        "serie_id", id

        $comment->save();
        return back();

    }
}