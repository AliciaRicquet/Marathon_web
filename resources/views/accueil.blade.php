@extends('layouts.app')

@section('content')
    <h2>Liste complète des séries</h2>

    <p>Voici la liste complète des séries via le lien ci dessous:</p>
    <a href ="series">Cliquez ici!</a>
    <p>Les 5 series les mieux notés: </p>
    @foreach($series as $serie)
        <a href ="{{route('detailsSerie',$serie->id)}}"><img src="{{$serie->urlImage}}" alt="Image Serie"></a>
    @endforeach
@endsection
