@extends('master')
        @section('content')
        <div>
            <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Registrar Producto</p>
                    </div>
                    <!-- Default form register -->
                    <form class="text-center border border-light p-5" action="{{ route('registrarp')}}" method="POST">
                        @csrf
                        <input type="text" id="txtProd" name="txtProd"class="form-control mb-4" placeholder="Nombre producto" required >
                            <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" id="txtvalProd" name="txtvalProd" class="form-control" placeholder="valor " required>
                                    </div>
                                    <div class="col">
                                    <input type="text" id="txtdescProd" name="txtdescProd" class="form-control" placeholder="Descripcion" required>
                                    </div>
                                </div>
                                <input type="text" id="txtcantProd" name="txtcantProd"class="form-control mb-4" placeholder="cantidad "required>
                                <select class="custom-select" id="sldescProd" name="sldescProd"  aria-label="Default select example"required>
                                <option value="1">con descuento</option>
                                <option value="0">sin descuento</option>
                            </select>
                           
                            <select class="custom-select" id="slcatProd" name="slcatProd"required>
                               
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
                        <button type="submit" class="btn btn-success">Registrar <i class="far fa-user ml-1 text-white"></i></button>
                    </form>
                    <!-- Default form register -->
                </div>
                <!--/.Content-->
            </div>
        </div>
    @stop