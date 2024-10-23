@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Reticulas/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Reticulas.destroy',$reticula)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="idReticula" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idReticula" name="idReticula" disabled value="{{$reticula->idReticula}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="descripcion" name="descripcion" disabled value="{{$reticula->descripcion}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="fechaEnVigor" class="col-sm-3 col-form-label">Fecha en vigor</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaEnVigor" name="fechaEnVigor" disabled value="{{old('fechaEnVigor',$reticula->fechaEnVigor)}}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="nombreCarrera" class="col-sm-3 col-form-label">Carrera</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" disabled value="{{$reticula->carrera->nombreCarrera}}">
        </div>
      </div>
    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Reticulas.index')}}" class="btn btn-primary">Regresar</a>
    
    
  </form>

@endsection


