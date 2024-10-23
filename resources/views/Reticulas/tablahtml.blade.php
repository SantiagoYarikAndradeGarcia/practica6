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
<a href="{{route('Reticulas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha en vigor</th>
                <th scope="col">Carrera</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($reticulas as $reticula)
            <tr>
                <td scope="row"> {{ $reticula->idReticula }}  </td>
                <td>{{ $reticula->descripcion }}  </td>
                <td><input type="date" class="form-control" id="fechaEnVigor2" name="fechaEnVigor" disabled value="{{ $reticula->fechaEnVigor }}"></td>
                <td>{{ $reticula->carrera->nombreCarrera }}</td>
                <td><a href="{{route('Reticulas.edit',$reticula->idReticula)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Reticulas.show',$reticula->idReticula)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Reticulas.show',$reticula->idReticula)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reticulas->links() }}

</div>