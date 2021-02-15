@extends('master')
@section('content')
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
                <a href="{{route('fromularioAct',$user->id_user)}}" class="btn  btn-primary btn-sm" > Actualizar</a>
                </td>
                <td>
                <a href="{route('eliminar',$user->id_user)}}" class="btn btn-primary btn-sm" > Eliminar</a>
                </td>
            </tr>
        
    @endforeach
        
    </tbody>
</table>
<a href="{{ route('formularioReg') }}" class="btn btn-success btn-sm " style="align-content: center;" > Registrar</a>

@stop