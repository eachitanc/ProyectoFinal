@extends('master')
@section('content')
<div class="container">
    <div class="row" id="divBuscar">
        <div class="col-sm-8">
            <h3>RESULTADO</h3>
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
        @if(count($producto) == 0)
            <div class="container">
                <h3>
                    No hay resultados para tu búsqueda...
                </h3>
            </div>
        @endif
        @foreach($producto as $pro)
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src='{{url("/img/anchetas/$pro->foto_producto")}}' class="img-fluid"/>
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$pro->nom_producto}}</h5>
                        <p class="card-text">{{$pro->descripcion_producto}}</p>
                        <h3>$ {{$pro->valor_producto}}</h3>
                        
                        <a href="#!" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop