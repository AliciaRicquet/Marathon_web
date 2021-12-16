@extends('layouts.app')

@section('content')
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="R A N D O M est un réseau social mettant en relation les gamers.">
        <meta name="authors" content="Victor Wallart, Léa Henin, Manoi Boinet">
        <meta name="keywords" content="R A N D O M, Mini-Facebook, DUT MMI">
        <title>CONNEXION</title>
        <link rel="stylesheet" href="{{ URL::asset('/css/normalize.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset ('/css/Accueil.css') }}"/>
        <link rel="icon" type="image/png" href=/img/images/connexionimg.jpg" />
    </head>
    <div id="main404">
        <div class="error-monkey">
            <h1>CONNEXION</h1>
            <form id="connexion" method="POST" action="{{ route('login') }}">
            @csrf
                <!--<input type="text" class="searchbar" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required> <br> -->
                <input type="text" class="searchbar @error('email') is-invalid @enderror" id="email" name="email" placeholder="Entrez votre e-mail"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <br>

                <input type="password" class="searchbar @error('password') is-invalid @enderror" id="mdp" name="mdp" placeholder="Entrez votre Mot De Passe" required autocomplete="current-password"><br>

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror


                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Se souvenir de moi') }}
                </label> <br>
                <!--<input type="password" class="searchbar" id="mdpconfirme" name="mdpconfirme" placeholder="Confirmer Mot De Passe"required> <br>-->
                <button type="submit" class="searchbar" id="submitconnexion" name="submitconnexion" value="ME CONNECTER" required>
                    {{ __('SE CONNECTER') }}
                </button> <br>
            </form>
        </div>
    </div>
    </html>
@endsection

