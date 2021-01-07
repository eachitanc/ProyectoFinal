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
                    @csrf
                    <div class="form-row mb-4">
                        <div class="col">
                            <input type="text" id="txtNomUser" name="txtNomUser" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col">
                            <input type="text" id="txtApeUser" name="txtApeUser" class="form-control" placeholder="Apellido">
                        </div>
                    </div>
                    <input type="number" id="numRol" name="numRol" value="3" hidden >
                    <input type="email" id="emailUser" name="emailUser" class="form-control mb-4" placeholder="Correo electrónico" required>
                    <input type="text" id="txtUser" name="txtUser"class="form-control mb-4" placeholder="Usuario" required>
                    <input type="password" id="passUser" name="passUser" class="form-control mb-4" placeholder="Contraseña" required>
                    <!-- Sign up button -->
                    <div style="color:red;">
                        <div hidden>
                            {{$resp = Session::get('resp')}}  
                        </div>  
                        @if($resp == 0)
                            Usuario ya registrado
                        @endif
                        @if($resp == 1)
                            Correo ya se encuentra en uso
                        @endif
                        @if($resp == 2)
                            <div style="color: green;">
                                ¡Registro Exitoso!
                            </div>
                            <a type="button" class="btn btn-default btn-sm" href="{{ route('formLogin') }}">Iniciar Sesión</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar <i class="far fa-user ml-1 text-white"></i></button>
                </form>
                <!-- Default form register -->
            </div>
            <!--/.Content-->
        </div>
    </div>
@stop