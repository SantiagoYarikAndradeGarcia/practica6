@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Periodos/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Editando</h1>
<form action="{{route('Periodos.update',$periodo->idPeriodo)}}" method="POST">
  @csrf

    <div class="row mb-3">
      <label for="idPeriodo" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idPeriodo" name="idPeriodo" value="{{$periodo->idPeriodo}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$periodo->descripcion}}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="fechaEnVigor" class="col-sm-3 col-form-label">Fecha En Vigor</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="fechaEnVigor" name="fechaEnVigor" value="{{$periodo->fechaEnVigor}}">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    
  </form>

@endsection


