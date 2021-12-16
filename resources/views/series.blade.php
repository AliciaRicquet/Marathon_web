@extends('layouts.app')

@section('content')
    <h1>Liste complète des séries!</h1>
    @foreach($series as $serie)
        <a href ="{{route('detailsSerie',$serie->id)}}"><img src="{{$serie->urlImage}}" alt="Image Serie"></a>
        <p>Langue: {{$serie->langue}}, note: {{$serie->note}}/10</p>
        <p>{{$serie->nbEpisodes()}} Episodes,  {{$serie->nbSaisons()}} Saisons</p>
        <p>Genre: <a href="{{route('seriesGenre', $serie->genre)}}" >{{$serie->genre}}</a></p>
    @endforeach
@endsection
