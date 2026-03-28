@extends('disseny')
@section('content')
<h1>Dades del curs</h1>
<div class="mt-5">
<table class="table table-striped table-bordered table-hover">
<thead class="thead-dark">
<tr class="table-primary">
<th scope="col">CAMP</td>
<th scope="col">VALOR</td>
</tr>
</thead>
<tbody>
<tr>
<td>Index</td>
<td>{{$dades_cursos->index}}</td>
</tr>
<tr>
<td>Nom</td>
<td>{{$dades_cursos->nomCurs}}</td>
</tr>
<tr>
<td>Tema</td>
<td>{{$dades_cursos->tema}}</td>
</tr>
<tr>
<td>Descripcio</td>
<td>{{$dades_cursos->descripcio}}</td>
</tr>
<tr>
<td>Durada hores</td>
<td>{{$dades_cursos->durada_hores}}</td>
</tr>
</tbody>
</table>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
</div>
<div>
@endsection