@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('PersonalPlazas/tablahtml')
    
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
  <form action="{{route('PersonalPlazas.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('PersonalPlazas.update',$personalplaza->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('PersonalPlazas.destroy',$personalplaza)}}" method="POST">
    
  @endif
  
  @csrf
    @if ($accion == 'E')
      <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="id" name="id" value="{{old('id',$personalplaza->id)}}" {{$des}} {{$iddes}}>
          @error('id')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
        </div>
      </div>
    @endif

    <div class="row mb-3">
      <label for="tipoNombramiento" class="col-sm-3 col-form-label">Tipo de nombramiento</label>
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipoNombramiento" id="tipo10" value=10
              {{ old('tipoNombramiento', $personalplaza->tipoNombramiento) == 10 ? 'checked' : '' }} {{$des}}>
          <label class="form-check-label" for="tipo10">
              Base
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="tipoNombramiento" id="tipo20" value=20
              {{ old('tipoNombramiento', $personalplaza->tipoNombramiento) == 20 ? 'checked' : '' }} {{$des}}>
          <label class="form-check-label" for="tipo20">
              Interinato
          </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="tipoNombramiento" id="tipo95" value=95
            {{ old('tipoNombramiento', $personalplaza->tipoNombramiento) == 95 ? 'checked' : '' }} {{$des}}>
        <label class="form-check-label" for="tipo95">
            Próximo a base
        </label>
      </div>
        @error('tipoNombramiento')
        <p class="text-danger">Error en: {{$message}}</p>
      @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="plaza_id">Plaza</label>
      <select name="plaza_id" id="plaza_id" required >
          <option value="">Seleccione una Plaza</option>
          @foreach ($plazas as $plaza)
              <option value="{{ $plaza->id }}" 
                {{ old('plaza_id', $personalplaza->plaza_id) == $plaza->id ? 'selected' : '' }}>
            {{ $plaza->nombreplaza }}</option>
          @endforeach
      </select>
    </div>

    <div class="row mb-3">
      <label for="personal_id">Personal</label>
      <select name="personal_id" id="personal_id" required >
          <option value="">Seleccione un Personal</option>
          @foreach ($personals as $personal)
              <option value="{{ $personal->id }}" 
                {{ old('personal_id', $personalplaza->personal_id) == $personal->id ? 'selected' : '' }}>
            {{ $personal->nombres }} {{ $personal->apellidoP }} {{ $personal->apellidoM }}</option>
          @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection


