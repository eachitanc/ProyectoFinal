@extends('master')
@section('content')
<br>
<div class="container"> 
    <div class="row justify-content-center minh-100" id="detalle">
    <div class="row ">
        @foreach($detal as $det)
        <div class="card mb-12" style="max-width: 650px;">
            <div class="row g-0">
                <div class="col-md-6">
                <img
                    src='{{url("/img/$det->foto_producto")}}'
                    alt="..."
                    class="img-fluid"
                    id="tam"
                />
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <br><br>
                    <h5 class="card-title">{{$det->nom_producto}}</h5>
                    <br>
                    <p class="card-text" style="text-align: justify;">
                    {{$det->descripcion_producto}}
                    </p>
                    <p class="card-text">
                        Categoria: {{$det->descripcion_cat}}
                        <br>
                        Valor: ${{$det->valor_producto - $det->valor_producto * 0.1 }}
                    </p>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div title="Agregar">
                                <a href="{{route('comprarProd', $det->id_producto)}}" class="btn btn-success btn-sm" >
                                    <i class="fas fa-shopping-cart" ></i>
                                </a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                        <div title="Regresar">
                                <a  href="{{route('ofertas')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-undo"></i>
                                </a>                            
                        </div> 
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            
        </div>
        @endforeach
        
    </div>
</div>
</div>
<br>
@stop
