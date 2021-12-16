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

    public function commenter(Request  $request) {
        $this->validate(
            $request,
            [
                'id' => 'required',
                'note' => 'required',
                'content' => 'required',
            ]
        );
        $comment = new Comment();
        $comment->content= $request->content;
        $comment->note = $request->note;
        $comment->validated = 0;
        $comment->user_id = Auth::id();
        $comment->serie_id = $request->id;
        $comment->save();
        return redirect("detailsSerie/".$comment->serie_id);
    }
}