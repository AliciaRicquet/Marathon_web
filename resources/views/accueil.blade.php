@extends('layouts.app');

@section('content')
    <h2>Liste complète des séries</h2>

        </div>

        <div id="textepage2" style="background-image: url({{asset('/img/images/fond2.jpg')}})">

            <div id="texteaccueil"><p>Les 5 séries les mieux notées !</p></div>

            <div id="soulignement"></div>

            <div id="les5images">
                @foreach($series as $serie)
                    <a href ="{{route('detailsSerie',$serie->id)}}"><img src="{{$serie->urlImage}}" alt="Image_série"></a>
                @endforeach
            </div>
        </div>
    </html>
@endsection
