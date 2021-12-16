<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Episode;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ControlleurUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $user =Auth::user();
        $is = $user -> seen;
        $val = $user -> comments;

        foreach($is as $vu){
            $tab[] = Serie::find($vu->serie_id);
        }
        $tab = array_unique($tab);


        foreach($val as $v){
            if($v->validated != 0){
                $tab2[] = Comment::find($v->validated);
            }
        }
        return view('utilisateur.index', ['tab' => $tab, 'tab2' => $tab2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $iu = User::find($id);
        return view('utilisateur.show', ['iu' => $iu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
