@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Horas/tablahtml')
    
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
  <form action="{{route('Horas.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Horas.update',$hora->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Horas.destroy',$hora)}}" method="POST">
    
  @endif
  
  @csrf
    @if ($accion == 'E')
      <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="id" name="id" value="{{old('id',$hora->id)}}" {{$des}} {{$iddes}}>
          @error('id')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
        </div>
      </div>
    @endif        
    
    <div class="row mb-3">
      <label for="horaIni" class="col-sm-3 col-form-label">Hora de Inicio</label>
      <div class="col-sm-9">
        <input type="time"class="form-control" name="horaIni" id="horaIni" value="{{ substr(old('horaIni',$hora->horaIni), 0, 5) }}" {{$des}}>  
        @error('horaIni')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="horaFin" class="col-sm-3 col-form-label">Hora de Fin</label>
      <div class="col-sm-9">
        <input type="time"class="form-control" name="horaFin" id="horaFin" value="{{ substr(old('horaFin',$hora->horaFin), 0, 5) }}" {{$des}}>  
        @error('horaFin')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


