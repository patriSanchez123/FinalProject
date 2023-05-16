@role('admin')
    <nav class="navbar navbar-expand-lg navbar-light bg-white m-0">
        <div class="container-fluid">
            <a class="nav-link mt-1 me-5" href="{{ route('home') }}"><img class="logo"
                    src="{{ URL::asset('logos/logo.jpg') }}" alt="ImageStart">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active me-5" aria-current="page" href="#">Empleados</a>
                    </li>
                    <li class="nav-item dropdown">

                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Materiales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Mensajes</a>
                    </li>
                    </li>
                </ul>
                <div class="col"></div>
                <ul class="navbar-nav me-5">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('logout') }}">Cerrar sesión<i
                                class="fa-solid fa-right-from-bracket ms-2" style="color: #e01f1f;"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endrole
@role('employee')
<nav class="navbar navbar-expand-lg navbar-light bg-white m-0">
    <div class="container-fluid">
        <a class="nav-link mt-1 me-5" href="{{ route('home') }}"><img class="logo"
                src="{{ URL::asset('logos/logo.jpg') }}" alt="ImageStart">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">

                <li class="nav-item">
                    <a class="nav-link me-5" href="#">Servicios a realizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-5" href="#">Nominas y contratos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-5" href="#">Realizar pedido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-5" href="#">Enviar mensaje</a>
                </li>
                </li>
            </ul>
            <div class="col"></div>
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('logout') }}">Cerrar sesión<i
                            class="fa-solid fa-right-from-bracket ms-2" style="color: #e01f1f;"></i></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endrole
@role('customer')
<nav class="navbar navbar-expand-lg navbar-light bg-white m-0">
    <div class="container-fluid">
        <a class="nav-link mt-1 me-5" href="{{ route('home') }}"><img class="logo"
                src="{{ URL::asset('logos/logo.jpg') }}" alt="ImageStart">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link me-5" href="#">Servicios contratados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-5" href="#">Enviar mensaje</a>
                </li>

                </li>
            </ul>
            <div class="col"></div>
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('logout') }}">Cerrar sesión<i
                            class="fa-solid fa-right-from-bracket ms-2" style="color: #e01f1f;"></i></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endrole
@unlessrole('admin|employee|customer')
    <nav class="navbar navbar-expand-lg navbar-light bg-white m-0">
        <div class="container-fluid">
            <a class="nav-link mt-1 me-5" href="{{ route('home') }}"><img class="logo"
                    src="{{ URL::asset('logos/logo.jpg') }}" alt="ImageStart">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active me-5" aria-current="page" href="#">Sobre nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Limpieza</a></li>
                            <li><a class="dropdown-item" href="#">Limpieza de cristales</a></li>
                            <li><a class="dropdown-item" href="#">Pulido y abrillantado</a></li>
                            <li><a class="dropdown-item" href="#">Mantenimiento</a></li>
                            <li><a class="dropdown-item" href="#">Jardín</a></li>

                        </ul>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Trabaja con nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Presupuesto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">Contacto</a>
                    </li>
                    </li>
                </ul>
                <div class="col"></div>
                <ul class="navbar-nav me-5">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('login') }}"> <img class="logo"
                                src="{{ URL::asset('logos/usuario.png') }}" alt="usuario"> Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('register') }}">Registrate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endrole


{{-- pasar al archivo js --}}
<script>
    // document.getElementById('m').addEventListener('click',activityHidden,false);


    function activityHidden() {

        let menu = document.getElementById('menu');
        // if(menu.hidden===true){
        //     menu.hidden=false;
        // }else{
        //     menu.hidden=true;

        // }
        if (menu.classList.contains('hidden')) {
            menu.classList.remove("hidden");
        } else {
            menu.classList.add("hidden");

        }

    }
</script>
