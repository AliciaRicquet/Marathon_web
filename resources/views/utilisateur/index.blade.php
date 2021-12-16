@extends('layouts.app')

@section('content')
    @guest
        <h2>L'accès à cette page vous est interdit!</h2>
    @else
        <h1>Profil</h1>
        <h2>Liste des informations de l'utilisateur</h2>
        <p>{{Auth::user()->name}},{{Auth::user()->email}} <img src="{{Auth::user()->avatar}}" alt="Votre avatar" width="50px" height="50px"> </p><br>

        <h2>Liste des séries vues: </h2>
        @foreach($tab as $l)
            <a href="../detailsSerie/{{$l->id}}" target="_blank"><img src="{{$l->urlImage}}" alt="Image de la série"></a>
        @endforeach
    @endguest
    @if(Auth::user()->administrateur)
        <h2>Liste des commentaires à valider</h2>
        @foreach($tab2 as $vl)
            <details>
                    <summary>{{$l->nom}}</summary>
                    {!! $vl->note !!}{!! $vl->content !!}
            </details>
        @endforeach
    @endif
@endsection