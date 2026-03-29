<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cursos Informatica</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header style="text-align:center; padding:20px; background-color:#f9f9f9; border
    bottom:1px solid #ddd;">
    <a href="{{ url('/') }}">
    <x-application-logo style="width:150px; display:block; margin:0 
    auto;"/>
    </a>
    </header>
    <div class="container-fluid">
    <h1>CyberMatica</h1>
<p>Pàgina inicial de l'aplicació web CyberMatica</p>
@if (Route::has('login'))
@auth
<a class="btn btn-primary" href="{{ url('/dashboard') }}">Dashboard</a><br>
@else
<a class="btn btn-primary" href="{{ route('login') }}">Log in</a><br><br>
@endauth
@endif
<a class="btn btn-primary" href="{{ url('/info') }}">Informació de l'aplicació</a><br>
</div>
</body>
</html>