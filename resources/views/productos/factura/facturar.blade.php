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
         <div class="text-center">
             <?php $band = 0;
                   $total = 0 ?>
            @foreach($datfact as $d)
                @if($band == 0)
                    @for($i = 0; $i < 1; $i++)
                        Factura: {{$d->id_factura}} 
                        <br>
                        Cliente: {{$d->nom_user}} {{$d->ape_user}}
                        <br>
                        Dirección: {{$d->dir_user}}
                        <br>
                        Teléfono: {{$d->tel_user}}
                        <br>
                        Correo: {{$d->correo_user}}
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
                            <th scope="row">1</th>
                            <td>{{$d->nom_producto}} </td>
                            <td>{{$d->valor_producto}}</td>
                            <td>{{$d->cantidad}}</td>
                            <td>
                                {{$d->descuento}}
                            
                            </td>
                            <td>${{$d->valor_producto*$d->cantidad-($d->valor_producto*0.1*$d->cantidad)}}</td>
                        </tr>
                        <?php $total = $total + ($d->valor_producto*$d->cantidad-($d->valor_producto*0.1*$d->cantidad)) ?>
            @endforeach
                    </tbody>
                </table>           
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