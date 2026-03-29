@extends('disseny')
@section('content')
<h1>Editar usuari</h1>
<form method="POST" action="{{ route('usuaris.update', $usuari->id) }}">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="name" class="form-control" value="{{ $usuari->name }}" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ $usuari->email }}" required>
    </div>
    <div class="mb-3">
        <label>Rol</label>
        <select name="role" class="form-control">
            <option value="gestor" {{ $usuari->role == 'gestor' ? 'selected' : '' }}>Gestor</option>
            <option value="consultor" {{ $usuari->role == 'consultor' ? 'selected' : '' }}>Consultor</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Actualitza</button>
    <a href="{{ route('usuaris.index') }}" class="btn btn-secondary">Cancel·lar</a>
</form>
@endsection