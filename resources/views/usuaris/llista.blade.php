@extends('disseny')
@section('content')
<h1>Llista d'usuaris</h1>
<div class="mt-5">
<table class="table">
    <thead>
        <tr class="table-primary">
            <td>ID</td>
            <td>Nom</td>
            <td>Email</td>
            <td>Rol</td>
            <td>Accions sobre la taula</td>
        </tr>
    </thead>
    <tbody>
        @foreach($dades_usuaris as $usuari)
        <tr>
            <td>{{ $usuari->id }}</td>
            <td>{{ $usuari->name }}</td>
            <td>{{ $usuari->email }}</td>
            <td>{{ $usuari->role }}</td>
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $usuari->id) }}" class="btn btn-primary btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $usuari->id) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Esborra</button>
                </form>
                <a href="{{ route('usuaris.show', $usuari->id) }}" class="btn btn-info btn-sm">Mostra</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ route('usuaris.create') }}" class="btn btn-primary mb-3">Nou usuari</a>
    <a href="{{ route('usuaris.pdf') }}" class="btn btn-warning mb-3">PDF llista d'usuaris</a><br>
    <a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection