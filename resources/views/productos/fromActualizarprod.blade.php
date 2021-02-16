@extends('master')
        @section('content')
        @foreach($prod as $ar)
        <div>
            <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Actualizar Datos</p>
                    </div>
                    <!-- Default form register -->
                    <form class="text-center border border-light p-5" action="{{ route('actualizarp', $ar->id_producto)}}" method="POST">
                        @csrf
                        <input type="text" id="idproducto" name="idproducto" class="form-control mb-4"  value="{{$ar->id_producto}}" >
                        <input type="text" id="txtProd" name="txtProd" class="form-control mb-4" placeholder="Usuario" value="{{$ar->nom_producto}}">
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" id="txtvalProd" name="txtvalProd" class="form-control" placeholder="valor" value="{{$ar->valor_producto}}">
                            </div>
                            <div class="col">
                                <input type="text" id="txtdescProd" name="txtdescProd" class="form-control" placeholder="descripcion" value="{{$ar->descripcion_producto}}">
                            </div>
                        </div>
                        
                        <input type="text" id="txtcantProd" name="txtcantProd"class="form-control mb-4" placeholder="cantidad" value="{{$ar->cant_producto}}">
                        
                        <select class="custom-select" id="sldescProd" name="sldescProd" placeholder="descuento"  aria-label="{{$ar->descuento}}"required>
                                <option value="1">con descuento</option>
                                <option value="0">sin descuento</option>
                            </select>
                           
                            <select class="custom-select" id="slcatProd" name="slcatProd" placeholder="categoria" value="{{$ar->categoria}}"required>
                               
                                    <option value="1">Anchetas</option>
                                    <option value="2">Chocolate</option>
                                    <option value="3">Desayunos sorpresa</option>
                                    <option value="4">Flores</option>
                                    <option value="5">Meriendas Sorpresa</option>
                                
                            </select>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="file" id="imagen" name="imagen" class="form-control" placeholder="imagen" required>
                                </div>
                            </div>
                        
                        <!-- Sign up button -->
                        <button type="submit" class="btn btn-success">Actualizar <i class="far fa-user ml-1 text-white"></i></button>
                    </form>
                    <!-- Default form register -->
                </div>
                <!--/.Content-->
            </div>
        </div>
        @endforeach
    @stop