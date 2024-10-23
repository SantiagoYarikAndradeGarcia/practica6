@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Materias/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Materias.destroy',$materia)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="idMateria" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idMateria" name="idMateria" disabled value="{{$materia->idMateria}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMateria" class="col-sm-3 col-form-label">Nombre Completo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" disabled value="{{$materia->nombreMateria}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" disabled value="{{$materia->nombreMediano}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" disabled value="{{$materia->nombreCorto}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nivel" class="col-sm-3 col-form-label">Nivel</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nivel" name="nivel" disabled value="{{ $materia->nivel == 'L' ? 'Licenciatura' : ($materia->nivel == 'M' ? 'Maestría' : 'Desconocido') }}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="modalidad" class="col-sm-3 col-form-label">Modalidad</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="modalidad" name="modalidad" disabled value="{{ $materia->modalidad == 'A' ? 'A distancia' : ($materia->modalidad == 'E' ? 'Escolarizada' : 'Desconocido') }}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="idReticula" class="col-sm-3 col-form-label">Retícula</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idReticula" name="idReticula" disabled value="{{$materia->reticula->idReticula}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Materias.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


