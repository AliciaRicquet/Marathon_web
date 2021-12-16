<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset ("css/normalize.css")}}" />
    <link rel="stylesheet" href="{{asset ("css/Accueil.css")}}">
    <link rel="stylesheet" href="{{asset ("css/connexionresponsive.css")}}">
</head>
<body>
<!-- Authentication Links -->
<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
</body>
</html>
