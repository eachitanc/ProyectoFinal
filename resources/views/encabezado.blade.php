<!--Navbar -->
<nav id="barraPrincipal" class="mb-1 navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">LA UNICA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ofertas</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Productos
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{url('/productos/anchetas')}}">Anchetas</a>
                    <a class="dropdown-item" href="#">Chocolates</a>
                    <a class="dropdown-item" href="#">Desayunos Sorpresa</a>
                    <a class="dropdown-item" href="#">Flores</a>
                    <a class="dropdown-item" href="#">Meriendas Sorpresa</a>
                    <a class="dropdown-item" href="#">Regalos</a>
                </div>
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
                    <a class="dropdown-item" href="{{ route('formLogin')}}">Iniciar Sesión</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->