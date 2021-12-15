@extends('layouts.app')

@section('content')
    <h1>Liste complète des séries!</h1>
    @foreach($series as $serie)
        <a href ="detailsSerie"><img src="{{$serie->urlImage}}" alt="Image Serie"></a>
        <p>Langue: {{$serie->langue}}, note: {{$serie->note}}/10</p>
        <p>{{$serie->nbEpisodes()}} Episodes,  {{$serie->nbSaisons()}} Saisons</p>
        <p>Genre: {{$serie->genre}}</p>
    @endforeach
@endsection
