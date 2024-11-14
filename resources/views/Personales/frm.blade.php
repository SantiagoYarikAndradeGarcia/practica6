@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('Personales/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')

<style>
  .academic-section {
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 5px;
    background-color: #7878781a;
  }
  .academic-section h5 {
    margin-bottom: 10px;
    color: #333;
  }

  .academic-row {
    display: flex;
    gap: 30px; /* Adjust the space between columns */
  }

  .academic-column {
    flex: 1; /* Make each input field take equal space */
  }
</style>

@foreach ( $errors->all() as $error )
  <li>
    {{$error}}
   </li>
@endforeach
<style>
  .form-control.hidden-input {
    display: block;
    visibility: hidden; 
  }
</style>
@if ($accion == 'C')
<h1>INSERTANDO</h1> 
  <form action="{{route('Personales.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Personales.update',$personal->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Personales.destroy',$personal)}}" method="POST">
    
  @endif
  
  @csrf
    @if ($accion == 'E')
      <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="id" name="id" value="{{old('id',$personal->id)}}" {{$des}} {{$iddes}}>
          @error('id')
          <p class="text-danger">Error en: {{$message}}</p>
          @enderror
        </div>
      </div>
    @endif

    <div class="row mb-3">
      <label for="RFC" class="col-sm-3 col-form-label">RFC</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="RFC" name="RFC" value="{{old('RFC',$personal->RFC)}}" {{$des}}>
        @error('RFC')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombres" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombres" name="nombres" value="{{old('nombres',$personal->nombres)}}" {{$des}}>
        @error('nombres')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="apellidoP" class="col-sm-3 col-form-label">Apellido Paterno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidoP" name="apellidoP" value="{{old('apellidoP',$personal->apellidoP)}}" {{$des}}>
        @error('apellidoP')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="apellidoM" class="col-sm-3 col-form-label">Apellido Materno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidoM" name="apellidoM" value="{{old('apellidoM',$personal->apellidoM)}}" {{$des}}>
        @error('apellidoM')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="academic-section mb-3">
      <h5 class="fw-bold">Título</h5>
  
      <div class="academic-row">
        <div class="academic-column">
          <label for="licenciatura" class="col-form-label">Licenciatura</label>
          <input type="text" class="form-control" id="licenciatura" name="licenciatura" disabled value="{{ old('licenciatura', $personal->licenciatura ) }}" {{ $des }}>
          <label for="licPasTit" class="col-form-label">Titulado</label>
          <div>
            <input type="radio" id="licPasTit_yes" name="licPasTit" value="1" {{ old('licPasTit', $personal->licPasTit ?? '') == '1' ? 'checked' : '' }}>
            <label for="licPasTit_yes">Sí</label>
            <input type="radio" id="licPasTit_no" name="licPasTit" value="0" {{ old('licPasTit', $personal->licPasTit ?? '') == '0' ? 'checked' : '' }} {{ $checked }} {{ $des }}>
            <label for="licPasTit_NO">No</label>
          </div>
        </div>
  
        <div class="academic-column">
          <label for="especializacion" class="col-form-label">Especialización</label>
          <input type="text" class="form-control" id="especializacion" name="especializacion" disabled value="{{ old('especializacion', $personal->especializacion) }}" {{ $des }}>
          <label for="espPasTit" class="col-form-label">Titulado</label>
          <div>
            <input type="radio" id="espPasTit_yes" name="espPasTit" value="1" {{ old('espPasTit', $personal->espPasTit ?? '') == '1' ? 'checked' : '' }} {{ $des }}>
            <label for="espPasTit_yes">Sí</label>
            <input type="radio" id="espPasTit_no" name="espPasTit" value="0" {{ old('espPasTit', $personal->espPasTit ?? '') == '0' ? 'checked' : '' }} {{ $checked }} {{ $des }}>
            <label for="espPasTit_no">No</label>
          </div>
        </div>
  
        <div class="academic-column">
          <label for="maestria" class="col-form-label">Maestría</label>
          <input type="text" class="form-control" id="maestria" name="maestria" disabled value="{{ old('maestria', $personal->maestria ) }}" {{ $des }}>
          <label for="maePasTit" class="col-form-label">Titulado</label>
          <div>
            <input type="radio" id="maePasTit_yes" name="maePasTit" value="1" {{ old('maePasTit', $personal->maePasTit ?? '') == '1' ? 'checked' : '' }} {{ $des }}>
            <label for="maePasTit_yes">Sí</label>
            <input type="radio" id="maePasTit_no" name="maePasTit" value="0" {{ old('maePasTit', $personal->maePasTit ?? '') == '0' ? 'checked' : '' }} {{ $checked }} {{ $des }}>
            <label for="maePasTit_no">No</label>
          </div>
        </div>
  
        <div class="academic-column">
          <label for="doctorado" class="col-form-label">Doctorado</label>
          <input type="text" class="form-control" id="doctorado" name="doctorado" disabled value="{{ old('doctorado', $personal->doctorado ) }}" {{ $des }}>
          <label for="docPasTit" class="col-form-label">Titulado</label>
          <div>
            <input type="radio" id="docPasTit_yes" name="docPasTit" value="1" {{ old('docPasTit', $personal->docPasTit ?? '') == '1' ? 'checked' : '' }} {{ $des }}>
            <label for="docPasTit_yes">Si</label>
            <input type="radio" id="docPasTit_no" name="docPasTit" value="0" {{ old('docPasTit', $personal->docPasTit ?? '') == '0' ? 'checked' : '' }} {{ $checked }} {{ $des }}>
            <label for="docPasTit_no">No</label>
          </div>
        </div>
      </div>
    </div>  

    <div class="row mb-3">
      <label for="fechaIngSep" class="col-sm-3 col-form-label">Fecha de ingreso a la SEP</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaIngSep" name="fechaIngSep" value="{{old('fechaIngSep',$personal->fechaIngSep)}}" {{$des}}>
        @error('fechaIngSep')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="fechaIngIns" class="col-sm-3 col-form-label">Fecha de ingreso al Instituto</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaIngIns" name="fechaIngIns" value="{{old('fechaIngIns',$personal->fechaIngIns)}}" {{$des}}>
        @error('fechaIngIns')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="depto_id">Departamento</label>
      <select name="depto_id" id="depto_id" required >
          <option value="">Seleccione un Departamento</option>
          @foreach ($deptos as $depto)
              <option value="{{ $depto->id }}" 
                {{ old('depto_id', $personal->depto_id) == $depto->id ? 'selected' : '' }}>
            {{ $depto->nombreDepto }}</option>
          @endforeach
      </select>
    </div>

    <div class="row mb-3">
      <label for="puesto_id">Puesto</label>
      <select name="puesto_id" id="puesto_id" required >
          <option value="">Seleccione un Puesto</option>
          @foreach ($puestos as $puesto)
              <option value="{{ $puesto->id }}" 
                {{ old('puesto_id', $personal->puesto_id) == $puesto->id ? 'selected' : '' }}>
            {{ $puesto->nombre }}</option>
          @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const licenciaturaInput = document.getElementById("licenciatura");
      const licPasTitYes = document.getElementById("licPasTit_yes");
      const licPasTitNo = document.getElementById("licPasTit_no");
      const especialidadInput = document.getElementById("especializacion");
      const espPasTitYes = document.getElementById("espPasTit_yes");
      const espPasTitNo = document.getElementById("espPasTit_no");
      const maestriaInput = document.getElementById("maestria");
      const maePasTitYes = document.getElementById("maePasTit_yes");
      const maePasTitNo = document.getElementById("maePasTit_no");
      const doctoradoInput = document.getElementById("doctorado");
      const docPasTitYes = document.getElementById("docPasTit_yes");
      const docPasTitNo = document.getElementById("docPasTit_no");

      
      // Inicialmente deshabilita el input de licenciatura
      licenciaturaInput.disabled = true;
      especialidadInput.disabled = true;
      maestriaInput.disabled = true;
      doctoradoInput.disabled = true;

      if(licPasTitYes.checked){
        licenciaturaInput.disabled = false;
      }
      if(espPasTitYes.checked){
        especialidadInput.disabled = false;
      }
      if(maePasTitYes.checked){
        maestriaInput.disabled = false;
      }
      if(docPasTitYes.checked){
        doctoradoInput.disabled = false;
      }
      
      // Agrega los eventos de cambio
      licPasTitYes.addEventListener("change", function() {
        if (licPasTitYes.checked) {
          licenciaturaInput.disabled = false; // Habilita el input si 'Sí' está seleccionado
        }
      });

      licPasTitNo.addEventListener("change", function() {
        if (licPasTitNo.checked) {
          licenciaturaInput.disabled = true; // Deshabilita el input si 'No' está seleccionado
        }
      });

      espPasTitYes.addEventListener("change", function() {
        if (espPasTitYes.checked) {
          especialidadInput.disabled = false; 
        }
      });

      espPasTitNo.addEventListener("change", function() {
        if (espPasTitNo.checked) {
          especialidadInput.disabled = true; 
        }
      });

      maePasTitYes.addEventListener("change", function() {
        if (maePasTitYes.checked) {
          maestriaInput.disabled = false; 
        }
      });

      maePasTitNo.addEventListener("change", function() {
        if (maePasTitNo.checked) {
          maestriaInput.disabled = true; 
        }
      });

      docPasTitYes.addEventListener("change", function() {
        if (docPasTitYes.checked) {
          doctoradoInput.disabled = false; 
        }
      });

      docPasTitNo.addEventListener("change", function() {
        if (docPasTitNo.checked) {
          doctoradoInput.disabled = true; 
        }
      });
    });
  </script>
@endsection
