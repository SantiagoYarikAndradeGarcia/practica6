@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Plazas/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Editando</h1>
<form action="{{route('Plazas.update',$plaza->idPlaza)}}" method="POST">
  @csrf

    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$plaza->nombre}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    
  </form>

@endsection


