@extends('layouts.app')

@section('content')
    <h1>Liste complète des séries!</h1>
    @foreach($series as $serie)
        <img src = "{{$serie -> urlImage}}" alt = "image_serie">
    @endforeach
@endsection

