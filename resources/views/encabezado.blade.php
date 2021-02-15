<!--Navbar -->
<nav id="barraPrincipal" class="mb-0 navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">LA UNICA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/usuario/inicio') }}">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ofertas')}}">Ofertas</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Productos
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{url('/productos/anchetas')}}">Anchetas</a>
                    <a class="dropdown-item" href="{{url('/productos/chocolates')}}">Chocolates</a>
                    <a class="dropdown-item" href="{{url('/productos/desayunos')}}">Desayunos Sorpresa</a>
                    <a class="dropdown-item" href="{{url('/productos/flores')}}">Flores</a>
                    <a class="dropdown-item" href="{{url('/productos/meriendas')}}">Meriendas Sorpresa</a>
                    <!--<a class="dropdown-item" href="#">Regalos</a>-->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-334" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" <?php 
                    if(session('rol_user')==3){
                        echo 'hidden';
                    }
                ?>>Gestion
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-334">
                    <a class="dropdown-item" href="#" 
                    <?php 
                        if(session('rol_user')==2){
                            echo 'hidden';
                        }
                    ?>>Usuarios</a>
                    <a class="dropdown-item" href="#">Productos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('informes')}}">Informes</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{ route('formActualizaUsuario') }}">Actualizar Perfíl</a>
                    <a class="dropdown-item" href="{{ url('/') }}">Cerrar Sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->