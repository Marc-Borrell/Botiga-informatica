@extends('disseny')
@section('content')
<h1>Dades de l'usuari</h1>
<table class="table table-bordered">
    <tr><td>ID</td><td>{{ $usuari->id }}</td></tr>
    <tr><td>Nom</td><td>{{ $usuari->name }}</td></tr>
    <tr><td>Email</td><td>{{ $usuari->email }}</td></tr>
    <tr><td>Rol</td><td>{{ $usuari->role }}</td></tr>
</table>
<a href="{{ route('usuaris.index') }}" class="btn btn-secondary">Torna</a>
@endsection