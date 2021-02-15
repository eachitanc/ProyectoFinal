@extends('master')
        @section('content')
        <div>
            <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Registrar Datos</p>
                    </div>
                    <!-- Default form register -->
                    <form class="text-center border border-light p-5" action="{{ route('registrar')}}" method="POST">
                        @csrf
                        <input type="text" id="txtUser" name="txtUser"class="form-control mb-4" placeholder="Usuario" >
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" id="txtNomUser" name="txtNomUser" class="form-control" placeholder="Nombre" >
                            </div>
                            <div class="col">
                                <input type="text" id="txtApeUser" name="txtApeUser" class="form-control" placeholder="Apellido" >
                            </div>
                            </div>
                            <input type="text" id="txtTelefono" name="txtTelefono"class="form-control mb-4" placeholder="Teléfono">
                            
                            <input type="email" id="emailUser" name="emailUser" class="form-control mb-4" placeholder="Correo electrónico" required>
                            <input type="password" id="passUser" name="passUser" class="form-control mb-4" placeholder="Contraseña" required>
                            <label for="roles">Tipo de Usuario</label> 
                            <select class="custom-select" id="roles" name="rol">
                                @foreach($rol as $r)
                                    <option value="{{$r->id_rol}}">{{$r->descripcion_rol}}</option>
                                @endforeach
                            </select>
                        <!-- Sign up button -->
                        <button type="submit" class="btn btn-success">Registrar <i class="far fa-user ml-1 text-white"></i></button>
                    </form>
                    <!-- Default form register -->
                </div>
                <!--/.Content-->
            </div>
        </div>
    @stop