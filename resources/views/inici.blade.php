<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cursos Informatica</title>
</head>
<body>
    <header style="text-align:center; padding:20px; background-color:#f9f9f9; border
    bottom:1px solid #ddd;">
    <a href="{{ url('/') }}">
    <x-application-logo style="width:150px; display:block; margin:0 
    auto;"/>
    </a>
    </header>
    <h1>CyberMatica</h1>
<p>Pàgina inicial de l'aplicació web CyberMatica</p>
@if (Route::has('login'))
@auth
<a href="{{ url('/dashboard') }}">Dashboard</a>
@else
<a href="{{ route('login') }}">Log in</a><br>
@endauth
@endif
<a href="{{ url('/info') }}">Informació de l'aplicació</a><br>
</body>
</html>