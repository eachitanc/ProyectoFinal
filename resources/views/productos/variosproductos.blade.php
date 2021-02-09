@extends('masterout')
@section('contenido')
    <div class="container"> 
        <div class="row" id="divBuscar">
            <div class="col" id="prod">
                <h3>Variedad de productos</h3>
                <h4>Para más productos, información y buscar lo que necesitas debes <a href="{{ route('formLogin')}}" style="color:blue">Iniciar Sesión</a> </h3>
            </div>
        </div>   
        <div class="row">
            @foreach($varProd as $v)
                <div class="col-md-3">
                    <br>
                    <div class="card" style="width: 15rem; height: 25rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src='{{url("/img/$v->foto_producto")}}' class="img-fluid" id="img"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$v->nom_producto}}</h5>
                            <p>$ {{$v->valor_producto}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<br>

@stop