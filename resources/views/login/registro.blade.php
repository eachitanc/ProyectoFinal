@extends('master')
    @section('content')
    <div>
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
            <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Formulario de Registro</p>
                </div>
                <!-- Default form register -->
                <form class="text-center border border-light p-5" action="{{ route('registroUsuario')}}" method="POST">
                    <div class="form-row mb-4">
                        <div class="col">
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col">
                            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellido">
                        </div>
                    </div>
                    <input type="email" id="formRegCorreo" class="form-control mb-4" placeholder="Correo electrónico" required>
                    <input type="text" id="formRegUser" class="form-control mb-4" placeholder="Usuario" required>
                    <input type="password" id="formRegPass" class="form-control mb-4" placeholder="Contraseña" required>

                    <!-- Sign up button -->
                    <a type="submit" class="btn btn-primary">Registrar <i class="far fa-user ml-1 text-white"></i></a>
                </form>
                <!-- Default form register -->
            </div>
            <!--/.Content-->
        </div>
    </div>
@stop