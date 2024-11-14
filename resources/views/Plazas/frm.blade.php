@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Plazas/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')


@foreach ( $errors->all() as $error )
  <li>
    {{$error}}
   </li>
@endforeach
@if ($accion == 'C')
<h1>INSERTANDO</h1> 
  <form action="{{route('Plazas.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Plazas.update',$plaza->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Plazas.destroy',$plaza)}}" method="POST">
    
  @endif
  
  @csrf
    @if ($accion == 'E')
      <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="id" name="id" value="{{old('id',$plaza->id)}}" {{$des}} {{$iddes}}>
          @error('id')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
        </div>
      </div>
    @endif              
    
    <div class="row mb-3">
      <label for="idPlaza" class="col-sm-3 col-form-label">Id plaza</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idPlaza" name="idPlaza" value="{{old('idPlaza',$plaza->idPlaza)}}" {{$des}}>
        @error('idPlaza')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    
    <div class="row mb-3">
      <label for="nombreplaza" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreplaza" name="nombreplaza" value="{{old('nombreplaza',$plaza->nombreplaza)}}" {{$des}}>
        @error('nombreplaza')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


