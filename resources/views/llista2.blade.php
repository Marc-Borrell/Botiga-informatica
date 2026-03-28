@extends('disseny')
@section('content')
<h1>Llista d'empleats</h1>
<div class="mt-5">
 <table class="table">
 <thead>
 <tr class="table-primary">
 <td>id</td>
 <td>Nom</td>
 <td>Rol</td>
 <td>Correu</td>
 </tr>
 </thead>
 <tbody>
 @foreach($dades_usuaris as $treb)
 <tr>
 <td>{{$treb->id}}</td>
 <td>{{$treb->name}}</td>
 <td>{{$treb->role}}</td>
 <td>{{$treb->email}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
<div>
<a href="{{ url('/dashboard') }}">Dashboard</a>
@endsection
