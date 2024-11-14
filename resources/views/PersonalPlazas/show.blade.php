@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('PersonalPlazas/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TODOS LOS DATOS</h1>
<form action="{{route('PersonalPlazas.destroy',$personalplaza)}}" method="POST">
  @csrf 
  
    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" disabled value="{{$personalplaza->id}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="tiponombramiento" class="col-sm-3 col-form-label">Tipo de nombramiento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="tiponombramiento" name="tiponombramiento" disabled value="{{ $personalplaza->tiponombramiento = 10 ? 'Base' : ($personalplaza->tiponombramiento  = 20 ? 'Interinato' : ($personalplaza->tiponombramiento  = 95 ? 'Próximo a base' : 'Desconocido')) }}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreplaza" class="col-sm-3 col-form-label">Plaza</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreplaza" name="nombreplaza" disabled value="{{$personalplaza->plaza->nombreplaza}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombrePersonal" class="col-sm-3 col-form-label">Personal</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrePersonal" name="nombrePersonal" disabled value="{{$personalplaza->personal->nombres}} {{$personalplaza->personal->apellidoP}} {{$personalplaza->personal->apellidoM}}">
      </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('PersonalPlazas.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


