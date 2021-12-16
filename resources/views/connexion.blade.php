@extends('layouts.app');

@section('content')
    <h2>Se Connecter :</h2>
    <form action = "" method="post">
        <div>
            <label for = "mail"> e-mail : </label>
            <input  id="mail" type = "text" name ="telephone" placeholder="Saisir l'adresse email">
        </div>

        <div>
            <label for = "password"> Mot de passe : </label>
            <input id="password" type = "text" name="password" placeholder="Saisir mot de passe">

        </div>
        <button type="submit">Envoyer</button>
    </form>

    <a href ="inscription">Pas encore inscris ?</a>
@endsection

