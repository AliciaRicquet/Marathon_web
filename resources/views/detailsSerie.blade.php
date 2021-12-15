@extends('layouts.app')

@section('content')
    <h1>Details de la serie</h1>
        <img src="{{$serie->urlImage}}" alt="Image Serie">
        <p>Date de sortie: {{$serie->premiere}}</p>
        <p>Genre: {{$serie->resume}}</p>
        <p>Langue: {{$serie->langue}}, note: {{$serie->note}}/10</p>
        <p>Genre: {{$serie->genre}}</p>
        <p>{{$serie->nbEpisodes()}} Episodes,  {{$serie->nbSaisons()}} Saisons</p>
@endsection