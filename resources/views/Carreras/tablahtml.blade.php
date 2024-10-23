<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Carreras.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">Departamento</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($carreras as $carrera)
            <tr>
                <td scope="row"> {{ $carrera->idCarrera }}  </td>
                <td>{{ $carrera->nombreCarrera }}  </td>
                <td>{{ $carrera->nombreMediano }}  </td>
                <td>{{ $carrera->nombreCorto }}  </td>
                <td>{{ $carrera->depto->nombreDepto }}  </td>
                <td><a href="{{route('Carreras.edit',$carrera->idCarrera)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Carreras.show',$carrera->idCarrera)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Carreras.show',$carrera->idCarrera)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $carreras->links() }}

</div>