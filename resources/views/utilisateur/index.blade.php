@extends('layouts.app')

@section('content')
    @guest
        <h2>L'accès à cette page vous est interdit!</h2>
    @else
        <h1>Profil</h1>
        <h2>Liste des informations de l'utilisateur</h2>
        <p>{{Auth::user()->name}},{{Auth::user()->email}}, <img src="{{Auth::user()->avatar}}" alt="Votre avatar" width="50px" height="50px"> </p><br>

        <h2>Liste des séries vues: </h2>
        @foreach($ie as $l)
            @if($l == Episode::id())
                <p>{{Serie::all()}}</p>
            @endif
        @endforeach
    @endguest
@endsection
