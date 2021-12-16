@extends('layouts.app')

@section('content')
    <h2>Liste complète des séries appartenant au genre selectionné</h2>
    @foreach($seriesGenre as $serie)
        <img src="{{asset($serie->urlImage)}}" alt="Image Serie">
        <p>Langue: {{$serie->langue}}, note: {{$serie->note}}/10</p>
        <p>{{$serie->nbEpisodes()}} Episodes,  {{$serie->nbSaisons()}} Saisons</p>
    @endforeach
@endsection