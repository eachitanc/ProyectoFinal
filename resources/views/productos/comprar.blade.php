@extends('master')
@section('content')
    <div class="container" align="center">
        <img src="{{url('/img/compraagregada.png')}}" alt="compraAgregada" style="height: 50%; width: 50%;">
        <div class="col-sm-8 align-middle" id="prod">
            <h2>Producto agregado con éxito</h2>
        </div>
        <br>
        <a href="{{route('facturar')}}" class="btn btn-success" >
            Realizar Compra
        </a>
        <br>
        <br>
    </div>
    
    
@stop