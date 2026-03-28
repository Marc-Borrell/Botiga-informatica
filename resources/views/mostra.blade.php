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
			<td>index</td>
			<td>{{$dades_curs->index}}</td>
		</tr>
		<tr>
			<td>Curs</td>
			<td>{{$dades_curs->nomCurs}}</td>
		</tr>
		<tr>
			<td>Tema</td>
			<td>{{$dades_curs->tema}}</td>
		</tr>
		<tr>
			<td>Descripcio</td>
			<td>{{$dades_curs->descripcio}}</td>
		</tr>
		<tr>
			<td>Data de naixement</td>
			<td>{{$dades_curs->data_naixement}}</td>
		</tr>
		<tr>
			<td>Durada</td>
			<td>{{$dades_curs->durada_hores}}</td>
		</tr>
		<tr>
			<td>Nivell</td>
			<td>{{$dades_curs->nivell}}</td>
		</tr>
		<tr>
			<td>Preu</td>
			<td>{{$dades_curs->preu}}</td>
		</tr>
		<tr>
			<td>Data inici</td>
			<td>{{$dades_curs->data_inici}}</td>
		</tr>
		<tr>
			<td>Actiu</td>
			<td>{{$dades_curs->actiu == "1" ? 'Sí':'No'}}</td>
		</tr>
		<tr>
			<td>Modalitat</td>
			<td>{{$dades_curs->modalitat}}</td>
		</tr>
		<tr>
			<td>Places maximes</td>
			<td>{{$dades_curs->places_maximes}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('cursos') }}">Torna a la llista</a>
  </div>
<div>
@endsection