<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset
<style>
    #fechaEnVigor2{  
        background-color: transparent;
        text-align: center;
        font-weight: bold;
    }
</style>
<a href="{{route('Periodos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Periodo</th>
                <th scope="col">Descripción Corta</th>
                <th scope="col">Fecha de Inicio</th>
                <th scope="col">Fecha de Fin</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($periodos as $periodo)
            <tr>
                <td scope="row"> {{ $periodo->idPeriodo }}  </td>
                <td>{{ $periodo->periodo }}  </td>
                <td>{{ $periodo->descCorta }}  </td>
                <td><input type="date" class="form-control" id="fechaEnVigor2" name="fechaEnVigor" disabled value="{{ $periodo->fechaIni }}"></td>
                <td><input type="date" class="form-control" id="fechaEnVigor2" name="fechaEnVigor" disabled value="{{ $periodo->fechaFin }}"></td>
                <td><a href="{{route('Periodos.edit',$periodo->idPeriodo)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Periodos.show',$periodo->idPeriodo)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Periodos.show',$periodo->idPeriodo)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $periodos->links() }}

</div>