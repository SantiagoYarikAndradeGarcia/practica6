@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Periodos/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Periodos.destroy',$periodo)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="idPeriodo" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idPeriodo" name="idPeriodo" disabled value="{{$periodo->idPeriodo}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="periodo" name="periodo" disabled value="{{$periodo->periodo}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="descCorta" class="col-sm-3 col-form-label">Descripción Corta</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="descCorta" name="descCorta" disabled value="{{$periodo->descCorta}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="fechaIni" class="col-sm-3 col-form-label">Fecha de Inicio</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaIni" name="fechaIni" disabled value="{{old('fechaIni',$periodo->fechaIni)}}">
        </div>
      </div>

      <div class="row mb-3">
        <label for="fechaFin" class="col-sm-3 col-form-label">Fecha de Fin</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaFin" name="fechaFin" disabled value="{{old('fechaFin',$periodo->fechaFin)}}">
        </div>
      </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Periodos.index')}}" class="btn btn-primary">Regresar</a>
    
    
  </form>

@endsection


