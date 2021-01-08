@extends('master')
@section('content')
<div class="container"> 
    <div class="row justify-content-center h-100">
    <div class="row ">
        @foreach($detal as $det)
        <div class="card mb-12" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-6">
                <img
                    src='{{url("/img/$det->foto_producto")}}'
                    alt="..."
                    class="img-fluid"
                />
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{$det->nom_producto}}</h5>
                    <p class="card-text">
                    <small class="text-muted">{{$det->descripcion_producto}}</small>
                    </p>
                    <p class="card-text">
                        Categoria: {{$det->descripcion_cat}}
                        <br>
                        Valor: ${{$det->valor_producto}}
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div title="Agregar">
                                <a href="#!" class="btn btn-success btn-sm" >
                                    <i class="fas fa-shopping-cart" ></i>
                                </a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                        <div title="Regresar">
                            <a  href="{{route('anchetas')}}" class="btn btn-primary btn-sm">
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
@stop
