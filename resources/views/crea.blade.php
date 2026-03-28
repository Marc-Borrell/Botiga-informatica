@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou curs
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <form method="post" action="/cursos">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="nomCurs">Curs</label>
            <input type="text" class="form-control" name="nomCurs"/>
        </div>
        <div class="form-group">           
            <label for="tema">Tema</label>
            <select name="tema">
                <option value="PHP">PHP</option>
                <option value="Java">Java</option>
                <option value="Python">Python</option>
                <option value="C">C</option>
                <option value="Javascript">Javascript</option>
            </select>
        </div>
        <div class="form-group">           
            <label for="descripcio">Descripcio</label>
            <input type="text" class="form-control" name="descripcio"/>
        </div>
        <div class="form-group">           
            <label for="durada_hores">Durada</label>
            <input type="number" class="form-control" name="durada_hores"/>
        </div>
        <div class="form-group">           
            <label for="nivell">Nivell</label>
            <select name="nivell">
			    <option value="basic">basic</option> 
			    <option value="intermedi">intermedi</option>		
                <option value="avancat">avançat</option>		    
			</select>
        </div>
        <div class="form-group">           
            <label for="preu">Preu</label>
            <input type="number" class="form-control" step="0.01" name="preu"/>
        </div>        
        <div class="form-group">
            <label for="data_inici">Data inici</label>
            <input type="date" class="form-control" name="data_inici"/>
        </div>
        <div class="form-group">
            <label for="actiu">Actiu</label>
            <select name="actiu">
			    <option value="1">Sí</option>
			    <option value="0">No</option>			    
			</select>
        </div>
        <div class="form-group">
            <label for="modalitat">Modalitat</label>
            <select name="modalitat">
			    <option value="online">Online</option>
			    <option value="presencial">Presencial</option>
			    <option value="hibrid">Hibrid</option>
			</select> 
        </div>
        <div class="form-group">           
            <label for="places_maximes">Places maximes</label>
            <input type="number" class="form-control" name="places_maximes"/>
        </div>       
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection