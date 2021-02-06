@extends('master')
@section('content')
    <div class="container"> 
        <div class="row" id="divBuscar">
            <div class="col-sm-8 align-middle" id="prod">
                <h3>OFERTAS DEL DIA</h3>
            </div>
        </div>   
        <div class="row">
            @foreach($oferta as $ofe)
                <div class="col-md-3">
                    <br>
                    <div class="card" style="width: 15rem; height: 30rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src='{{url("/img/$ofe->foto_producto")}}' class="img-fluid" id="img"/>
                            <a href="#!">
                                
                            </a>
                            
                        </div>
                        <div class="card-body">
                            <h2>
                                <a class="link-primary,"href="{{url('/productos/descripcion_cat')}}"style="color:blue;">{{$ofe->descripcion_cat}}</a>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </h2>
                            <h5 class="card-title">{{$ofe->nom_producto}}</h5>
                            <p style="color:gray;text-decoration: line-through;" > Antes: $ {{$ofe->valor_producto}}</p>
                            Ahora: ${{$ofe->valor_producto - $ofe->valor_producto * 0.1 }} 
                            <div class="row">
                                <div class="col-md-6">
                                    <div title="Agregar">
                                        <a href="#!" class="btn btn-success btn-sm" >
                                            <i class="fas fa-shopping-cart" ></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div title="Detalles">
                                        <a  href="{{route('detallesOferta', $ofe->id_producto)}}"class="btn btn-primary btn-sm" value="Detalles">
                                            <i class="fas fa-list"></i>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@stop