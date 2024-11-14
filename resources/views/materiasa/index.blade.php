@extends("plantillas/plantilla1")

@section("contenido1")
<div class="row">
    <div class="col-10">
        <h3>Apertuda de Materias</h3>
    </div>
    <div class="col-2">
        {{-- {!!dd(request()->all())!!} --}}
        {{session("periodo_id")}}
        {{session('carrera_id')}}
        <form action="{{route('materiasa.index')}}" method="get">
            <select name="idperiodo" id="idperiodo" onchange="this.form.submit()">
                <option value="-1">Seleccione el periodo</option>
                @foreach ($periodos as $periodo )
                <option value="{{$periodo->id}}" @if($periodo->id == session('periodo_id'))
                    {{ "selected" }}
                    @endif
                    >{{$periodo->id}} {{ $periodo->periodo }}</option>
                @endforeach

            </select><br>
            <select name="idcarrera" id="idcarrera" onchange="this.form.submit()">
                <option value="-1">Seleccione la carrera</option>
                @foreach ($carreras as $carr )
                <option value="{{$carr->id}}" @if($carr->id == session('carrera_id'))
                    {{ "selected" }}
                    @endif
                    >{{$carr->id}} {{$carr->nombrecarrera }}</option>
                @endforeach
            </select>
        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{route('materiasa.store')}}" method="post">
            @csrf
            <input type="hidden" name="eliminar" id="eliminar" value="NOELIMINAR">
            <button>Sem 1</button><br>
            @if($carrera->count() and session('periodo_id') != "-1")
            @foreach ( $carrera[0]->reticulas[0]->materias as $materia )
            <input type="checkbox" 
                    name="m{{$materia->id}}" 
                    value="{{$materia->id}}" 
                    onchange="enviar(this)"
                    {{-- onchange="this.form.submit()" --}}
                    @if ( $ma->firstWhere('materia_id',$materia['id']))
                        {{"checked"}}
                    @endif>
            {{$materia->id}}
            {{$materia->nombrecorto}}<br>
            @endforeach
            @endif
        </form>
    </div>
</div>
<script>

    function enviar(chbox){
        if (!chbox.checked){
            document.getElementById('eliminar').value = chbox.value;
        }
        chbox.form.submit();    
    }
</script>
@endsection
{{-- @extends("plantillas/plantilla3")

@section("contenido1")
<div class="row">
    <div class="col-10">
        <h3>Apertura de materias</h3>
    </div>
    <div class="col-2">
        <form action=" {{route('materiasa.index')}}" method="get">
            <select name="idperiodo" id="idperiodo" onchange="this.form.submit()">
                <option value="">Seleccione el periodo</option>
                @foreach ($periodos as $periodo)
                    <option value="{{ $periodo->id }}">{{ $periodo->periodo}}</option>
                    @if($periodo->id == session('periodo_id'))
                        {{ 'selected' }}
                    @endif
                @endforeach
            </select> <br>
        </form>
        <select name="idcarrera" id="idcarrera" onchange="this.form.submit()">
            <option value="">Seleccione la carrera</option>
            @foreach ($carreras as $carr)
                <option value="{{ $carr->idCarrera }}">{{ $carr->nombreCarrera}}</option>
                @if($carr->id == session('carrera_id'))
                    {{ 'selected' }}
                @endif
            @endforeach
        </select> <br>
    </div>
</div>
<div class="row">
    <div class="col">
        <button>Sem 1</button> <br>
        @if($carrera)
         @foreach ($carrera[0]->reticulas[0]->materias as $materia)
            <input type="checkbox" name="m{{ $materia->id }}">{{ $materia->nombrecorto }} <br>
         @endforeach
        @endif
    </div>
</div>


@endsection --}}