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
<a href="{{route('Personales.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">RFC</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Título en Lic.</th>
                <th scope="col">Título en Esp.</th>
                <th scope="col">Título en Maes.</th>
                <th scope="col">Título en Doc.</th>
                <th scope="col">Fecha de ingreso SEP</th>
                <th scope="col">Fecha de ingreso Instituto</th>
                <th scope="col">Departamento</th>
                <th scope="col">Puesto</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>  
        <tbody>
            @foreach ($personals as $personal)
            <tr>
                <td scope="row"> {{ $personal->id }}  </td>
                <td>{{ $personal->RFC }}  </td>
                <td>{{ $personal->nombres }}  </td>
                <td>{{ $personal->apellidoP }}  </td>
                <td>{{ $personal->apellidoM }}  </td>
                <td>{{ $personal->licPasTit == '0' ? '-' : ($personal->licPasTit == '1' ? $personal->licenciatura : 'Desconocido')}}  </td>
                <td>{{ $personal->espPasTit == '0' ? '-' : ($personal->espPasTit == '1' ? $personal->especializacion : 'Desconocido') }}  </td>
                <td>{{ $personal->maePasTit == '0' ? '-' : ($personal->maePasTit == '1' ? $personal->maestria : 'Desconocido') }}  </td>
                <td>{{ $personal->docPasTit == '0' ? '-' : ($personal->docPasTit == '1' ? $personal->doctorado : 'Desconocido') }}  </td>
                <td><input type="date" class="form-control" id="fechaEnVigor2" name="fechaEnVigor" disabled value="{{ $personal->fechaIngSep }}"></td>
                <td><input type="date" class="form-control" id="fechaEnVigor2" name="fechaEnVigor" disabled value="{{ $personal->fechaIngIns }}"></td>
                <td>{{ $personal->depto->nombreDepto }}  </td>
                <td>{{ $personal->puesto->nombre }}  </td>
                <td><a href="{{route('Personales.edit',$personal->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('Personales.show',$personal->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('Personales.show',$personal->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $personals->links() }}

</div>