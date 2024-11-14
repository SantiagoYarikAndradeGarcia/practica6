@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Horas/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('Horas.destroy',$hora)}}" method="POST">
  @csrf 

    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" disabled value="{{$hora->id}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="horaIni" class="col-sm-3 col-form-label">Hora de Inicio</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="horaIni" name="horaIni" disabled value="{{ substr($hora->horaIni, 0, 5) }}">
      </div>
    </div>
    
    <div class="row mb-3">
      <label for="horaFin" class="col-sm-3 col-form-label">Hora de Fin</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="horaFin" name="horaFin" disabled value="{{ substr($hora->horaFin, 0, 5) }}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Horas.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


