<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Materias.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">Nivel</th>
                <th scope="col">Modalidad</th>
                <th scope="col">Reticula</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($materias as $materia)
            <tr>
                <td scope="row"> {{ $materia->idMateria }}  </td>
                <td>{{ $materia->nombreMateria }}  </td>
                <td>{{ $materia->nombreMediano }}  </td>
                <td>{{ $materia->nombreCorto }}  </td>
                <td>{{ $materia->nivel == 'L' ? 'Licenciatura' : ($materia->nivel == 'M' ? 'Maestría' : 'Desconocido') }}</td>
                <td>{{ $materia->modalidad == 'A' ? 'A distancia' : ($materia->modalidad == 'E' ? 'Escolarizada' : 'Desconocido') }}</td>
                <td>{{ $materia->reticula->idReticula }}  </td>
                <td><a href="{{route('Materias.edit',$materia->idMateria)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Materias.show',$materia->idMateria)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Materias.show',$materia->idMateria)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $materias->links() }}

</div>