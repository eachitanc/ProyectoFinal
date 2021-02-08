@extends('master')
@section('content')  
 <!-- Central Modal Medium Success -->

   <div class="modal-dialog modal-notify modal-success modal-lg" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
            <p class="heading lead">Factura de Venta - La Única</p>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="">
             <?php $band = 0;
                   $total = 0;
                   $j=1 ?>
            @foreach($datfact as $d)
                @if($band == 0)
                    @for($i = 0; $i < 1; $i++)
                        <div class="row">
                            <div class="col col-sm-12" id="divfact">
                                <h3>Factura No: {{$d->id_factura}} </h3> 
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col col-sm-6" id="divfact">
                                Cliente: <i>{{$d->nom_user}} {{$d->ape_user}}</i>
                            </div>
                            <div class="col col-sm-6" id="divfact">
                                Dirección: <i>{{$d->dir_user}}</i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-sm-6" id="divfact">
                                Teléfono: <i>{{$d->tel_user}}</i>
                            </div>
                            <div class="col col-sm-6" id="divfact">
                                Correo: <i>{{$d->correo_user}}</i>
                            </div>
                        </div>                        
                    @endfor
                    <?php $band = 1?>
                    <table class="table" border="2">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Producto</th>
                            <th scope="col">Valor Unitario</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Descuento</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                @endif
                        <tr>
                            <th scope="row">{{$j}}</th>
                            <td>{{$d->nom_producto}} </td>
                            <td>{{$d->valor_producto}}</td>
                            <td>1</td>
                            <td>
                                <?php 
                                    if($d->descuento == 1){
                                        $desc = $d->valor_producto*0.1;
                                        echo $desc;
                                    }
                                    else{
                                        $desc = 0;
                                        echo '$0';
                                    }
                                ?>
                            </td>
                            <td>${{$d->valor_producto-$desc}}</td>
                        </tr>
                        <?php $total = $total + ($d->valor_producto-$desc); $j++ ?>
            @endforeach
                    </tbody>
                </table> 
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="slcFormaPago"><i class="fab fa-cc-visa fa-lg"></i></label>
                                </div>
                                <select class="browser-default custom-select" id="slcFormaPago">
                                    <option selected disabled> <--Elegir forma de pago-->  </option>
                                    @foreach($fpago as $fp)
                                        <option value="{{$fp->id_pago}}">{{$fp->descripcion_pago}}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div> 
                        <div class="col-3">
                            TOTAL: ${{$total}}
                        </div>   
                    </div> 
                </div>  
                       
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Aceptar</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
@stop