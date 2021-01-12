    @extends('master')
        @section('content')
        @foreach($user as $u)
        <div>
            <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Actualizar Datos</p>
                    </div>
                    <!-- Default form register -->
                    <form class="text-center border border-light p-5" action="{{ route('resFormActualizaUsuario')}}" method="POST">
                        @csrf
                        <input type="text" id="txtUser" name="txtUser"class="form-control mb-4" placeholder="Usuario" value="{{$u->user}}">
                        <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" id="txtNomUser" name="txtNomUser" class="form-control" placeholder="Nombre" value="{{$u->nom_user}}">
                            </div>
                            <div class="col">
                                <input type="text" id="txtApeUser" name="txtApeUser" class="form-control" placeholder="Apellido" value="{{$u->ape_user}}">
                            </div>
                        </div>
                        <input type="text" id="txtDireccion" name="txtDireccion"class="form-control mb-4" placeholder="Dirección" value="{{$u->dir_user}}">
                        <input type="text" id="txtTelefono" name="txtTelefono"class="form-control mb-4" placeholder="Teléfono" value="{{$u->tel_user}}">
                        
                        <input type="email" id="emailUser" name="emailUser" class="form-control mb-4" placeholder="Correo electrónico" value="{{$u->correo_user}}" required>
                        <input type="password" id="passUser" name="passUser" class="form-control mb-4" placeholder="Contraseña" value="{{$u->pass_user}}" required>
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