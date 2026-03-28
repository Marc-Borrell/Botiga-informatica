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
          <td>Accions sobre la taula</td>           
        </tr>
    </thead>
    <tbody>
        @foreach($dades_cursos as $treb)
        <tr>
            <td>{{$treb->index}}</td>
            <td>{{$treb->nomCurs}}</td>
            <td>{{$treb->tema}}</td>                       
            <td class="text-left">
            <a href="{{ route('cursos.edit', $treb->index)}}" class="btn btn-primary btn-sm">Edita</a>
            <form action="{{ route('cursos.destroy', $treb->index)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">
                Esborra
              </button>
            </form>
            <a href="{{ route('cursos.show', $treb->index)}}" class="btn btn-info btn-sm">Mostra</a>  
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