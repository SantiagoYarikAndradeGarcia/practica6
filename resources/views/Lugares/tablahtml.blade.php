<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Lugares.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">Edificio</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($lugares as $lugar)
            <tr>
                <td scope="row"> {{ $lugar->id }}  </td>
                <td>{{ $lugar->nombreLugar }}  </td>
                <td>{{ $lugar->nombreCorto }} </td>
                <td>{{ $lugar->edificio->nombreEdificio }}</td>
                <td><a href="{{route('Lugares.edit',$lugar->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Lugares.show',$lugar->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Lugares.show',$lugar->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $lugares->links() }}

</div>