@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Personales/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Personales.destroy',$personal)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" disabled value="{{$personal->id}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="RFC" class="col-sm-3 col-form-label">RFC</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="RFC" name="RFC" disabled value="{{$personal->RFC}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombres" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombres" name="nombres" disabled value="{{$personal->nombres}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="apellidoP" class="col-sm-3 col-form-label">Apellido Paterno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidoP" name="apellidoP" disabled value="{{$personal->apellidoP}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="apellidoM" class="col-sm-3 col-form-label">Apellido Materno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidoM" name="apellidoM" disabled value="{{$personal->apellidoM}}">
      </div>
    </div>

    {{-- <div class="row mb-3">
      <label for="nivel" class="col-sm-3 col-form-label">Titulo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nivel" name="nivel" disabled value="{{ $personal->nivel == 'L' ? 'Licenciatura' : ($personal->nivel == 'M' ? 'Maestría' : 'Desconocido') }}">
      </div>
    </div> --}}

    <div class="row mb-3">
      <label for="fechaIngSep" class="col-sm-3 col-form-label">Fecha de ingreso a la SEP</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaIngSep" name="fechaIngSep" disabled value="{{old('fechaIngSep',$personal->fechaIngSep)}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="fechaIngIns" class="col-sm-3 col-form-label">Fecha de ingreso al Instituto</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaIngIns" name="fechaIngIns" disabled value="{{old('fechaIngIns',$personal->fechaIngIns)}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreDepto" class="col-sm-3 col-form-label">Departamento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" disabled value="{{$personal->depto->nombreDepto}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Puesto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$personal->puesto->nombre}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Personales.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


