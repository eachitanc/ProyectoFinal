@extends('master')
@section('content')
    <div class="container"> 
        <div class="row" id="divBuscar">
            <div class="col-sm-8 align-middle" id="prod">
                <h3 >CHOCOLATES</h3>
            </div>
            <div class="col">
                <form action="{{ route('searchProduct')}}" method="POST"> 
                    @csrf
                    <div class="row" id="divBuscar">  
                        <form class="form-inline my-1">
                            <div class="md-form form-sm my-0">
                                <input id="txtBuscar" name="txtBuscar" class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Buscar"
                                aria-label="Buscar">
                            </div>
                            <button class="btn btn-outline-blue btn-sm my-0" type="submit">Buscar</button>
                        </form>
                    </div> 
                </form> 
            </div>
        </div>   
        <div class="row">
            @foreach($chocolate as $cho)
                <div class="col-md-3">
                    <br>
                    <div class="card" style="width: 15rem; height: 25rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src='{{url("/img/$cho->foto_producto")}}' class="img-fluid" id="img"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$cho->nom_producto}}</h5>
                            <p>$ {{$cho->valor_producto}}</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div title="Agregar">
                                        <a href="{{route('comprarProd', $cho->id_producto)}}#!" class="btn btn-success btn-sm" >
                                            <i class="fas fa-shopping-cart" ></i>
                                        </a>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div title="Detalles">
                                        <a  href="{{route('detallesProd', $cho->id_producto)}}"class="btn btn-primary btn-sm" value="Detalles">
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

    <br>
@stop