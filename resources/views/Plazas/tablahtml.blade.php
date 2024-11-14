<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Plazas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Id Plaza</th>
                <th scope="col">Nombre</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($plazas as $plaza)
            <tr>
                <td scope="row"> {{ $plaza->id }}  </td>
                <td>{{ $plaza->idPlaza }}  </td>
                <td>{{ $plaza->nombreplaza }}  </td>
                <td><a href="{{route('Plazas.edit',$plaza->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Plazas.show',$plaza->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Plazas.show',$plaza->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $plazas->links() }}

</div>