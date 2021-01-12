@extends('masterout')
    @section('contenido')
    {{session(['id_usuario' => '0'])}}
    <div>
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
            <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Iniciar Sesión</p>
                </div>
                <form action="{{ route('loginUsuario')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="text-center">
                            <!-- Email -->
                            <input type="text" id="defaultLoginFormUser" name="defaultLoginFormUser" class="form-control mb-4" placeholder="Usuario">

                            <!-- Password -->
                            <input type="password" id="defaultLoginFormPassword" name="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">

                            <!-- Sign in button -->
                            
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary">Login <i class="far fa-user ml-1 text-white"></i></button>
                    </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
@stop