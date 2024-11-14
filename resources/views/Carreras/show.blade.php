@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Carreras/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Carreras.destroy',$carrera)}}" method="POST">
  @csrf 

    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" disabled value="{{$carrera->id}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="idCarrera" class="col-sm-3 col-form-label">Id carrera</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idCarrera" name="idCarrera" disabled value="{{$carrera->idCarrera}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCarrera" class="col-sm-3 col-form-label">Nombre Completo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" disabled value="{{$carrera->nombreCarrera}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" disabled value="{{$carrera->nombreMediano}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" disabled value="{{$carrera->nombreCorto}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreDepto" class="col-sm-3 col-form-label">Departamento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" disabled value="{{$carrera->depto->nombreDepto}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Carreras.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


