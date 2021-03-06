@extends('master')
@section('content')
<br>
<div class="container" style="heigh:500px;"> 
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
                        Valor: ${{$det->valor_producto}}
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
                            @if($det->descripcion_cat == "Anchetas")
                                <a  href="{{route('anchetas')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-undo"></i>
                                </a>
                            @endif 
                            @if($det->descripcion_cat == "Chocolates")
                                <a  href="{{route('chocolates')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-undo"></i>
                                </a>
                            @endif
                            @if($det->descripcion_cat == "Desayunos Sorpresa")
                                <a  href="{{route('desayunos')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-undo"></i>
                                </a>
                            @endif
                            @if($det->descripcion_cat == "Flores")
                                <a  href="{{route('flores')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-undo"></i>
                                </a>
                            @endif
                            @if($det->descripcion_cat == "Meriendas Sorpresa")
                                <a  href="{{route('meriendas')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-undo"></i>
                                </a>
                            @endif
                            
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
