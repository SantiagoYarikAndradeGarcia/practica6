<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Horas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Hora de Inicio</th>
                <th scope="col">Hora de Fin</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($horas as $hora)
            <tr>
                <td scope="row"> {{ $hora->id }}  </td>
                {{-- <td><input type="time" name="" id="" value="{{ substr($hora->horaIni, 0, 5) }}" disabled>  </td>
                <td><input type="time" name="" id="" value="{{ substr($hora->horaFin, 0, 5) }}" disabled> </td> --}}
                <td>{{ substr($hora->horaIni, 0, 5) }} </td>
                <td>{{ substr($hora->horaFin, 0, 5) }} </td>
                <td><a href="{{route('Horas.edit',$hora->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Horas.show',$hora->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Horas.show',$hora->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $horas->links() }}

</div>