@extends('master')
@section('content')
    <h1 style="text-align: center;"> Listado Usuarios </h1>
    <div class="container">
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
                    <form action="{{ route('eliminar')}}" method="POST">
                    @csrf
                        <input type="text" value="{{$user->id_user}}" name="txtId" hidden >
                        <button type="submit" class="btn btn-primary btn-sm" > Eliminar</buton>
                    </form>
                    </td>
                </tr>
            
        @endforeach
            
        </tbody>
    </table>

    <a href="{{ route('formularioReg') }}" class="btn btn-success btn-sm " style="align-content: center;" > Registrar</a>
</div>
@stop