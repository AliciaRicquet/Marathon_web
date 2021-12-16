@extends('layouts.app')

@section('content')
    <h2>Liste complète des séries</h2>

    <p>Voici la liste complète des séries via le lien ci dessous:</p></br>
    <a href ="series">Cliquez ici!</a>

    @foreach($series as $serie)
        <img src="{{$serie->urlImage}}" alt="Image_série"></a>
    @endforeach
@endsection
