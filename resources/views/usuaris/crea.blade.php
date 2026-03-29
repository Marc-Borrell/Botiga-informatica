@extends('disseny')
@section('content')
<h1>Crear nou usuari</h1>
<form method="POST" action="{{ route('usuaris.store') }}">
    @csrf
    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Contrasenya</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Confirma contrasenya</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Rol</label>
        <select name="role" class="form-control">
            <option value="gestor">Gestor</option>
            <option value="consultor">Consultor</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
    <a href="{{ route('usuaris.index') }}" class="btn btn-secondary">Cancel·lar</a>
</form>
@endsection