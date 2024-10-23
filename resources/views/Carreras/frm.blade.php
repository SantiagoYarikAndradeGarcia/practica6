@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Carreras/tablahtml')
    
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
  <form action="{{route('Carreras.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Carreras.update',$carrera->idCarrera)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Carreras.destroy',$carrera)}}" method="POST">
    
  @endif
  
  @csrf
    <div class="row mb-3">
      <label for="idCarrera" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idCarrera" name="idCarrera" value="{{old('idCarrera',$carrera->idCarrera)}}" {{$des}}>
        @error('idCarrera')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    
    <div class="row mb-3">
      <label for="nombreCarrera" class="col-sm-3 col-form-label">Nombre Completo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" value="{{old('nombreCarrera',$carrera->nombreCarrera)}}" {{$des}}>
        @error('nombreCarrera')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{old('nombreMediano',$carrera->nombreMediano)}}" {{$des}}>
        @error('nombreMediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{old('nombreCorto',$carrera->nombreCorto)}}" {{$des}}>
        @error('nombreCorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="depto_id">Departamento</label>
      <select name="depto_id" id="depto_id" required >
          <option value="">Seleccione un Departamento</option>
          @foreach ($deptos as $depto)
              <option value="{{ $depto->idDepto }}" 
                {{ old('depto_id', $carrera->depto_id) == $depto->idDepto ? 'selected' : '' }}>
            {{ $depto->nombreDepto }}</option>
          @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


