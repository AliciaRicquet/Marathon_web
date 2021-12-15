@extends('layouts.app');

@section('content')
    <h2>S'inscrire :</h2>
    <form action = "" method="post">
        <div>
            <label for = "name"> Nom : </label>
            <input id="name" type="text" name="nom" placeholder="Saisir le nom">
        </div>
        <div>
            <label for = "password"> Mot de passe : </label>
            <input id="password" type = "text" name="password" placeholder="Saisir mot de passe">

        </div>
        <div>
            <label for = "mail"> e-mail : </label>
            <input  id="mail" type = "text" name ="telephone" placeholder="Saisir l'adresse email">
        </div>
        <button type="reset">Annuler</button>
        <button type="submit">Envoyer</button>
    </form>
@endsection
