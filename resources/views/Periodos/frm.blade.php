@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Periodos/tablahtml')
    
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
  <form action="{{route('Periodos.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Periodos.update',$periodo->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Periodos.destroy',$periodo)}}" method="POST">
    
  @endif
  
  @csrf
  @if ($accion == 'E')
    <div class="row mb-3">
      <label for="id" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="id" name="id" value="{{old('id',$periodo->id)}}" {{$des}} {{$iddes}}>
        @error('id')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
  @endif                 

    <div class="row mb-3">
      <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="periodo" name="periodo" value="{{old('periodo',$periodo->periodo)}}" {{$des}}>
        @error('periodo')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="descCorta" class="col-sm-3 col-form-label">Descripción Corta</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="descCorta" name="descCorta" value="{{old('descCorta',$periodo->descCorta)}}" {{$des}}>
        @error('descCorta')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
        <label for="fechaIni" class="col-sm-3 col-form-label">Fecha de Inicio</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaIni" name="fechaIni" value="{{old('fechaIni',$periodo->fechaIni)}}" {{$des}}>
          @error('fechaIni')
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      </div>

      <div class="row mb-3">
        <label for="fechaFin" class="col-sm-3 col-form-label">Fecha de Fin</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="{{old('fechaFin',$periodo->fechaFin)}}" {{$des}}>
          @error('fechaFin')
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


