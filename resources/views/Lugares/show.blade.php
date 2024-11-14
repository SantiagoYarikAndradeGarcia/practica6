@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Lugares/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Lugares.destroy',$lugar)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" disabled value="{{$lugar->id}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreLugar" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreLugar" name="nombreLugar" disabled value="{{$lugar->nombreLugar}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" disabled value="{{$lugar->nombreCorto}}">
      </div>
    </div>

      <div class="row mb-3">
        <label for="nombreEdificio" class="col-sm-3 col-form-label">Edificio</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombreEdificio" name="nombreEdificio" disabled value="{{$lugar->edificio->nombreEdificio}}">
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Lugares.index')}}" class="btn btn-primary">Regresar</a>
    
    
  </form>

@endsection


