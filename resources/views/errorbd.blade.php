<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Error d'accés a la BD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container-fluid">
<h1>Atenció!!!!</h1>
<p>Error tipus: "SQLSTATE[HY000] [2002] Connection refused"</p>
<p>
Comprova que:
<ol>
<li>El servidor MySQL està en marxa</li>
<li>L'adreça IP i/o nom del host són correctes</li>
<li>El port del servidor és correcte</li>
</ol>
</p>
<a class="btn btn-info" href="{{ route('login') }}">Torna a l'inici de sessió</a>
</div>
</body>
</html>