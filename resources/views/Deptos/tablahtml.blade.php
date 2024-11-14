<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Deptos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">idDepto</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">Nombre Corto</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($deptos as $depto)
            <tr>
                <td scope="row"> {{ $depto->id }}  </td>
                <td>{{ $depto->idDepto }}  </td>
                <td>{{ $depto->nombreDepto }}  </td>
                <td>{{ $depto->nombreMediano }}  </td>
                <td>{{ $depto->nombreCorto }}  </td>
                <td><a href="{{route('Deptos.edit',$depto->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Deptos.show',$depto->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Deptos.show',$depto->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $deptos->links() }}

</div>