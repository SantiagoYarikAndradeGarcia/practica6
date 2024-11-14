@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Materias/tablahtml')
    
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
  <form action="{{route('Materias.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Materias.update',$materia->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Materias.destroy',$materia)}}" method="POST">
    
  @endif
  
  @csrf
    @if ($accion == 'E')
      <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="id" name="id" value="{{old('id',$materia->id)}}" {{$des}} {{$iddes}}>
          @error('id')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
        </div>
      </div>
    @endif
    
    <div class="row mb-3">
      <label for="nombreMateria" class="col-sm-3 col-form-label">Nombre Completo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" value="{{old('nombreMateria',$materia->nombreMateria)}}" {{$des}}>
        @error('nombreMateria')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" value="{{old('nombreMediano',$materia->nombreMediano)}}" {{$des}}>
        @error('nombreMediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" value="{{old('nombreCorto',$materia->nombreCorto)}}" {{$des}}>
        @error('nombreCorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nivel" class="col-sm-3 col-form-label">Nivel</label>
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="nivel" id="nivelL" value="L"
              {{ old('nivel', $materia->nivel) == 'L' ? 'checked' : '' }} {{$des}}>
          <label class="form-check-label" for="nivelL">
              Licenciatura
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="nivel" id="nivelM" value="M"
              {{ old('nivel', $materia->nivel) == 'M' ? 'checked' : '' }} {{$des}}>
          <label class="form-check-label" for="nivelM">
              Maestría
          </label>
      </div>
        @error('nivel')
        <p class="text-danger">Error en: {{$message}}</p>
      @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="modalidad" class="col-sm-3 col-form-label">Modalidad</label>
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="modalidad" id="modalidadA" value="A"
              {{ old('modalidad', $materia->modalidad) == 'A' ? 'checked' : '' }} {{$des}}>
          <label class="form-check-label" for="modalidadA">
              A distancia
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="modalidad" id="modalidadE" value="E"
              {{ old('modalidad', $materia->modalidad) == 'E' ? 'checked' : '' }} {{$des}}>
          <label class="form-check-label" for="modalidadE">
              Escolarizada
          </label>
      </div>
        @error('modalidad')
        <p class="text-danger">Error en: {{$message}}</p>
      @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="semestre" class="col-sm-3 col-form-label">Semestre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="semestre" name="semestre" value="{{old('semestre',$materia->semestre)}}" {{$des}}>
        @error('semestre')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="reticula_id">Retícula</label>
      <select name="reticula_id" id="reticula_id" required >
          <option value="">Seleccione una Retícula</option>
          @foreach ($reticulas as $reticula)
              <option value="{{ $reticula->id }}" 
                {{ old('reticula_id', $materia->reticula_id) == $reticula->id ? 'selected' : '' }}>
            {{ $reticula->descripcion }}</option>
          @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


