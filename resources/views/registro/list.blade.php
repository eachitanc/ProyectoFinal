@extends('principal')
@section('contenido')
    <h1 style="text-align: center;"> Listado Usuarios </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido </th>
            <th scope="col">Tipo Usuario </th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuario as $user)
      
            <tr>
            <td> {{ $user->id_user }} </td>
            <td> {{ $user->nom_user}} </td>
            <td> {{ $user->ape_user }}</td>
            <td> {{ $user->descripcion_rol }}</td>
            <td>
                <a href="" class="btn btn-primary" > Actualizar</a>
                </td>
                <td>
                <a href="" class="btn btn-primary" > Eliminar</a>
                </td>
            </tr>
        
    @endforeach
        
    </tbody>
</table>
<a href="" class="btn btn-primary" > Registrar</a>

@stop