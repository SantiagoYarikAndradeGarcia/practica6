<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Puestos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Id puesto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($puestos as $puesto)
            <tr>
                <td scope="row"> {{ $puesto->id }}  </td>
                <td>{{ $puesto->idPuesto }}  </td>
                <td>{{ $puesto->nombre }}  </td>
                <td>{{ $puesto->tipo }}  </td>
                <td><a href="{{route('Puestos.edit',$puesto->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Puestos.show',$puesto->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Puestos.show',$puesto->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $puestos->links() }}

</div>