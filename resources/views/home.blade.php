<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    
</head>
<body>
    {{-- Nuestro menú --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
            <li><a class="navbar-brand" href="#">Visitas a Oficina</a> </li>         
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownvisitas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Visitas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownvisitas">
                            <li><a class="dropdown-item" href="/visitas/show">Ver Visitas</a></li>
                            <li><a class="dropdown-item" href="/visitas/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/visitas/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClient" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Tramites
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownClient">
                            <li><a class="dropdown-item" href="/tramites/show">Ver tramites</a></li>
                            <li><a class="dropdown-item" href="/tramites/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/tramites/create">Crear</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/informes/show">Ver Informes</a></li>
                            <li><a class="dropdown-item" href="/informes/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/informes/create">Crear</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            usuarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                            <li><a class="dropdown-item" href="/usuarios/show">Ver usuarios</a></li>
                            <li><a class="dropdown-item" href="/usuarios/update">Actualizar</a></li>
                            <li><a class="dropdown-item" href="/usuarios/create">Crear</a></li>
                        </ul>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                visitantes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                                <li><a class="dropdown-item" href="/visitantes/show">Ver visitantes</a></li>
                                <li><a class="dropdown-item" href="/visitantes/update">Actualizar</a></li>
                                <li><a class="dropdown-item" href="/visitantes/create">Crear</a></li>
                            </ul>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    {{-- Mensaje de bienvenida --}}
    <div class="container text-center my-5">
        <div class="alert alert-primary" role="alert">
            <h1 class="display-4">¡Bienvenido a la Oficina!</h1>
            <p class="lead">Estamos aquí para ayudarle con sus visitas y trámites.</p>
        </div>
    </div>

    {{-- Resto del contenido de la página --}}

    
</body>
</html>
