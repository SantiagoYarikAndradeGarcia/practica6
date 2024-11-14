@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Deptos/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Deptos.destroy',$depto)}}" method="POST">
  @csrf 

    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" disabled value="{{$depto->id}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="idDepto" class="col-sm-3 col-form-label">Id depto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idDepto" name="idDepto" disabled value="{{$depto->idDepto}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreDepto" class="col-sm-3 col-form-label">Nombre Completo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreDepto" name="nombreDepto" disabled value="{{$depto->nombreDepto}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" disabled value="{{$depto->nombreMediano}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" disabled value="{{$depto->nombreCorto}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Deptos.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


