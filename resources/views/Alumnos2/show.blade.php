@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Alumnos2/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TDOOS LOS DATOS</h1>
<form action="{{route('Alumnos2.destroy',$alumno)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="noctrl" class="col-sm-3 col-form-label">Número de Control</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="noctrl" name="noctrl" disabled value="{{$alumno->noctrl}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$alumno->nombre}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop" disabled value="{{$alumno->apellidop}} ">
        </div>
      </div>

      <div class="row mb-3">
        <label for="apellidom" class="col-sm-3 col-form-label">Apellido Materno</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidom" name="apellidom" disabled value="{{$alumno->apellidom}} ">
        </div>
      </div>

      <div class="row mb-3">
        <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="sexo" name="sexo" disabled value="{{ $alumno->sexo == 'M' ? 'Masculino' : ($alumno->sexo  == 'F' ? 'Femenino' : 'Desconocido') }}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="nombreCarrera" class="col-sm-3 col-form-label">Carrera</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" disabled value="{{$alumno->carrera->nombreCarrera}}">
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Alumnos2.index')}}" class="btn btn-primary">Regresar</a>
    
    
  </form>

@endsection


