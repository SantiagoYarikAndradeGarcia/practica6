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
<a href="{{route('PersonalPlazas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipo de nombramiento</th>
                <th scope="col">Plaza</th>
                <th scope="col">Personal</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>  
        <tbody>
            @foreach ($personalplazas as $personalplaza)
            <tr>
                <td scope="row"> {{ $personalplaza->id }}  </td>
                <td>{{ $personalplaza->tipoNombramiento == 10 ? 'Base' : ($personalplaza->tipoNombramiento == 20 ? 'Interinato' : ($personalplaza->tipoNombramiento == 95 ? 'Próximo a base' : 'Desconocido')) }} </td>
                <td>{{ $personalplaza->plaza->nombreplaza }}  </td>
                <td>{{ $personalplaza->personal->nombres }} {{ $personalplaza->personal->apellidoP }} {{ $personalplaza->personal->apellidoM }} </td>
                <td><a href="{{route('PersonalPlazas.edit',$personalplaza->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('PersonalPlazas.show',$personalplaza->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('PersonalPlazas.show',$personalplaza->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $personalplazas->links() }}

</div>