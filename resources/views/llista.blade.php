@extends('disseny')
@section('content')
<h1>Llista de cursos</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>Index</td>
 <td>Curs</td>
 <td>Tema</td>
 <td>Descripcio</td>
 <td>Durada</td>
 <td>Nivell</td>
 <td>Preu</td>
 <td>Data inci</td>
 <td>Actiu</td>
 <td>Modalitat</td>
 <td>Places maximes</td>
 <td>Accions sobre la taula principal</td> 
 </tr>
 </thead>
 <tbody>
 @foreach($dades_cursos as $treb)
 <tr>

 <td>{{$treb->index}}</td>
 <td>{{$treb->nomCurs}}</td>
 <td>{{$treb->tema}}</td>
 <td>{{$treb->descripcio}}</td>
 <td>{{$treb->durada_hores}}</td>
 <td>{{$treb->nivell}}</td>
 <td>{{$treb->preu}}</td>
 <td>{{$treb->data_inici}}</td>
 <td>{{$treb->tlf_mobil}}</td>
 <td>{{$treb->actiu}}</td>
 <td>{{$treb->modalitat}}</td>
 <td>{{$treb->places_maximes}}</td>
 <td class="text-left">
 <form action="{{ route('cursos.destroy', $treb->index)}}" method="post" style="display: inline-block">
 @csrf
 @method('DELETE')
 <button class="btn btn-danger btn-sm" type="submit">
 Esborra
 </button>
 <a href="{{ route('cursos.edit', $treb->index)}}" class="btn btn-primary btn-sm">Edita</a>
 <a href="{{ route('cursos.show', $treb->index)}}" class="btn btn-info btn-sm">Mostra</a>
 </form>
</td>

 </tr>
 @endforeach
 </tbody>
 </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection

