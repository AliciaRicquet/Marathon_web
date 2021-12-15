@extends('layouts.app')

@section('content')
    <h1>Liste complète des séries!</h1>
    @foreach($series as $serie)
        <p>{{$serie}}</p><br>
    @endforeach
@endsection

