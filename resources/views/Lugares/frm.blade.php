@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Lugares/tablahtml')
    
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
  <form action="{{route('Lugares.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Lugares.update',$lugar->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Lugares.destroy',$lugar)}}" method="POST">
    
  @endif
  
  @csrf
    @if ($accion == 'E')
      <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="id" name="id" value="{{old('id',$lugar->id)}}" {{$des}} {{$iddes}}>
          @error('id')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
        </div>
      </div>
    @endif

    <div class="row mb-3">
      <label for="nombreLugar" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreLugar" name="nombreLugar" value="{{old('nombreLugar',$lugar->nombreLugar)}}" {{$des}}>
        @error('nombreLugar')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{old('nombreCorto',$lugar->nombreCorto)}}" {{$des}}>
        @error('nombreCorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

      <div class="row mb-3">
        <label for="edificio_id">Edificio</label>
        <select name="edificio_id" id="edificio_id" required >
            <option value="">Seleccione un Edificio</option>
            @foreach ($edificios as $edificio)
                <option value="{{ $edificio->id }}" 
                  {{ old('edificio_id', $lugar->edificio_id) == $edificio->id ? 'selected' : '' }}>
              {{ $edificio->nombreEdificio }}</option>
            @endforeach
        </select>
      </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


