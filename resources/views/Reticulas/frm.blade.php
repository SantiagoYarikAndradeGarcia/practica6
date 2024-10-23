@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Reticulas/tablahtml')
    
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
  <form action="{{route('Reticulas.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Reticulas.update',$reticula->idReticula)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Reticulas.destroy',$reticula)}}" method="POST">
    
  @endif
  
  @csrf
    
    <div class="row mb-3">
      <label for="idReticula" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idReticula" name="idReticula" value="{{old('idReticula',$reticula->idReticula)}}" {{$des}}>
        @error('idReticula')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion',$reticula->descripcion)}}" {{$des}}>
        @error('descripcion')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
        <label for="fechaEnVigor" class="col-sm-3 col-form-label">Fecha En Vigor</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaEnVigor" name="fechaEnVigor" value="{{old('fechaEnVigor',$reticula->fechaEnVigor)}}" {{$des}}>
          @error('fechaEnVigor')
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
        </div>
      </div>

      <div class="row mb-3">
        <label for="carrera_id">Carrera</label>
        <select name="carrera_id" id="carrera_id" required >
            <option value="">Seleccione una Carrera</option>
            @foreach ($carreras as $carrera)
                <option value="{{ $carrera->idCarrera }}" 
                  {{ old('carrera_id', $reticula->carrera_id) == $carrera->idCarrera ? 'selected' : '' }}>
              {{ $carrera->nombreCarrera }}</option>
            @endforeach
        </select>
      </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


