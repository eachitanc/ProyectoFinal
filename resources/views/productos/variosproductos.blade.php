@extends('master')
@section('content')
    <h1 style="text-align: center;"> Listado Productos </h1>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre producto</th>
                <th scope="col">Descripcion </th>
                <th scope="col">Valor </th>
                <th scope="col">Cantidad  </th>
                <th scope="col">categoria </th>
                <th scope="col">Opciones </th>
            </tr>
        </thead>
        <tbody>
        @foreach($varProd as $producto)
        
                <tr>
                    <td> {{ $producto->id_producto }} </td>
                    <td> {{ $producto->nom_producto}} </td>
                    <td> {{ $producto->descripcion_producto }}</td>
                    <td> {{ $producto->valor_producto}}</td>
                    <td> {{ $producto->cant_producto}}</td>
                    <td> {{ $producto->descripcion_cat}}</td>

                    <td>
                        <div class="row">
                            <div class="col col-3">
                                <a href="{{route('fromularioActp',$producto->id_producto)}}" class="btn  btn-primary btn-sm" > Actualizar</a>
                            </div>
                            
                        </div>
                
                    </td>
                    <td>
                        <div class="row">
                            <div class="col col-3">
                                <form action="{{ route('eliminar')}}" method="POST">
                                    @csrf
                                    <input type="text" value="{{$producto->id_producto}}" name="txtId" hidden >
                                    <button type="submit" class="btn btn-danger btn-sm" > Eliminar</buton>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            
        @endforeach
            
        </tbody>
    </table>

    <a href="{{ route('formularioReg1')}}" class="btn btn-success btn-sm " style="align-content: center;" > Registrar</a>
</div>
@stop