<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Alumnos2.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">No. Ctrl.</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Sexo</th>
                <th scope="col">Email</th>
                <th scope="col">Carrera</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td scope="row"> {{ $alumno->id }}  </td>
                <td>{{ $alumno->noctrl }}  </td>
                <td>{{ $alumno->nombre }}  </td>
                <td>{{ $alumno->apellidop }}</td>
                <td>{{ $alumno->apellidom }}</td>
                <td>{{ $alumno->sexo == 'M' ? 'Masculino' : ($alumno->sexo == 'F' ? 'Femenino' : 'Desconocido') }}</td>
                <td>{{ $alumno->email }}</td>
                <td>{{ $alumno->carrera->nombreCarrera }}</td>
                <td><a href="{{route('Alumnos2.edit',$alumno->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Alumnos2.show',$alumno->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Alumnos2.show',$alumno->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alumnos->links() }}

</div>