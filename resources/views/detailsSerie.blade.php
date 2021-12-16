@extends('layouts.app')

@section('content')
    <h1>Details de la serie</h1>
        <img src="{{asset($detailsSeries->urlImage)}}" alt="Image Serie">
        <p>Date de sortie: {{$detailsSeries->premiere}}</p>
        <p>Langue: {{$detailsSeries->langue}}, note: {{$detailsSeries->note}}/10</p>
        <p>Genre: {{$detailsSeries->genre}}</p>
        <p>Resume: {!! $detailsSeries->resume !!}</p>
        <p>{{$detailsSeries->nbSaisons()}} Saisons</p>

        <p>Liste des episodes</p>
        @foreach($detailsSeries->episodes as $ep)
            <p>{{$ep->nom}}, Saison: {{$ep->saison}}</p>
            <p><img src="{{asset($ep->urlImage)}}" alt="Image Episodes"></p>
        @endforeach

@endsection