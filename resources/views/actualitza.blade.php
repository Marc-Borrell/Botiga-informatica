@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('cursos.update', $dades_cursos->index) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="nomCurs">Curs</label>
				<input type="text" class="form-control" name="nomCurs" value="{{ $dades_cursos->nomCurs }}" />
			</div>
			<div class="form-group">           
				<label for="tema">Tema</label>
				<select name="tema">
					<option value="{{ $dades_cursos->tema }}" 'selected'></option>
					<option value="PHP" {{ $dades_cursos->tema == "PHP" ? 'selected' : ''}}>PHP</option>
					<option value="Java" {{ $dades_cursos->tema == "Java" ? 'selected' : ''}}>Java</option>
					<option value="Python" {{ $dades_cursos->tema == "Python" ? 'selected' : ''}}>Python</option>
					<option value="C" {{ $dades_cursos->tema == "C" ? 'selected' : ''}}>C</option>	
                    <option value="Javascript" {{ $dades_cursos->tema == "Javascript" ? 'selected' : ''}}>Javascript</option>					
				</select> 
			</div>
			<div class="form-group">           
				<label for="descripcio">Descripcio</label>
				<input type="text" class="form-control" name="descripcio" value="{{ $dades_cursos->descripcio }}"/>
			</div>
			<div class="form-group">           
				<label for="durada_hores">Durada</label>
				<input type="number" class="form-control" name="durada_hores" value="{{ $dades_cursos->durada_hores }}"/>
			</div>
			<div class="form-group">           
				<label for="nivell">Nivell</label>
				<select name="nivell">					
					<option value="basic" {{ $dades_cursos->nivell == "basic" ? 'selected' : ''}}>Basic</option>
					<option value="intermedi" {{ $dades_cursos->nivell == "intermedi" ? 'selected' : ''}}>Intermedi</option>
                    <option value="avancat" {{ $dades_cursos->nivell == "avancat" ? 'selected' : ''}}>Avançat</option>					    
				</select>
			</div>
			<div class="form-group">           
				<label for="preu">Preu</label>
				<input type="number" class="form-control" name="preu" step="0.01" value="{{ $dades_cursos->preu }}"/>
			</div>        
			<div class="form-group">
				<label for="data_inici">Data inici</label>
				<input type="date" class="form-control" name="data_inici"  value="{{ $dades_cursos->data_inici }}"/>
			</div>
			<div class="form-group">
				<label for="actiu">Actiu</label>
				<select name="actiu">
					<option value="1" {{ $dades_cursos->actiu == "1" ? 'selected' : ''}}>Sí</option>
					<option value="0" {{ $dades_cursos->actiu == "0" ? 'selected' : ''}}>No</option>			    
				</select>
			</div>
			<div class="form-group">
				<label for="modalitat">Modalitat</label>
				<select name="modalitat">
					<option value="{{ $dades_cursos->modalitat }}" 'selected'></option>
					<option value="online" {{ $dades_cursos->modalitat == "online" ? 'selected' : ''}}>Online</option>
					<option value="presencial" {{ $dades_cursos->modalitat == "presencial" ? 'selected' : ''}}>Presencial</option>
					<option value="hibrid" {{ $dades_cursos->modalitat == "hibrid" ? 'selected' : ''}}>Hibrid</option>					
				</select>  
			</div>
			<div class="form-group">           
				<label for="places_maximes">Places maximes</label>
				<input type="number" class="form-control" name="places_maximes" value="{{ $dades_cursos->places_maximes }}"/>
			</div>       
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('cursos') }}">Accés directe a la Llista de cursos</a>
@endsection