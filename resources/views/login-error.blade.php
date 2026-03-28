<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Error de login</title>
</head>
<body>
<h1>Atenció!!!!</h1>
<p>Error les credencials introduïdes no son correctes</p>
<p>
Comprova que:
<ol>
<li>La contrasenya estigui correcta</li>
<li>El correu registrat estigui ben escrit</li>
</ol>
</p>
<a href="{{ route('login') }}">Torna a l'inici de sessió</a>
</body>
</html>