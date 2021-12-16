@extends('layouts.app')

@section('content')
    <h1>Details de la serie</h1>
        <img src="{{asset($detailsSeries->urlImage)}}" alt="Image Serie">
        <p>Date de sortie: {{$detailsSeries->premiere}}</p>
        <p>Langue: {{$detailsSeries->langue}}, note: {{$detailsSeries->note}}/10</p>
        <p>Genre: {{$detailsSeries->genre}}</p>
        <p>Resume: {!! $detailsSeries->resume !!}</p>
        <p>{{$detailsSeries->nbSaisons()}} Saisons</p>

    @auth
        <form action="/detailsSerie" method="post">
            <input type="hidden" value="{{$detailsSeries->id}}" name="id">
            <input type="number" min="0" max="10" value="5" name="note" />
            <textarea name="content">


            </textarea>

            <input type="submit" />
        </form>
        @foreach($detailsSeries->comments as $c)
            {!! $c->content !!}
        @endforeach
        <p>Liste des episodes</p>
        @foreach($detailsSeries->episodes as $ep)
            <p>{{$ep->nom}}, Saison: {{$ep->saison}}</p>
            <input type="checkbox" id="vu" name="vu">
            <label for="vu"><img src="{{asset($ep->urlImage)}}" alt="Image Episodes"></label>
        @endforeach
    @endauth
    @guest
        @foreach($detailsSeries->comments as $c)
            {!! $c->content !!}
        @endforeach
        <p>Liste des episodes</p>
        @foreach($detailsSeries->episodes as $ep)
            <p>{{$ep->nom}}, Saison: {{$ep->saison}}</p>
            <p><img src="{{asset($ep->urlImage)}}" alt="Image Episodes"></p>
        @endforeach
    @endguest
@endsection