<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TUFI Store</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite([
            'resources/sass/app.scss',
            'resources/css/styles.css',
            'resources/js/app.js'
        ])

    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'TUFI Store') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                         <!-- TODO: crear estas secciones 
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('categorias.index') }}">Tienda</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('categorias.index') }}">Contacto</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('categorias.index') }}">Carrito</a>
                         </li>
                         -->
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('categorias.index') }}">Categorías</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('articulos.index') }}">Artículos</a>
                         </li>
                         <!-- TODO: crear estas secciones
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="{{ route('categorias.index') }}">Mi Perfil</a>
                         </li>
                         -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/front01.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/front02.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Sobre TUFI Store -->
            <section class="sobre-tufistore seccion-oscura">
                <div class="contenedor">
                    <h2 class="seccion-titulo">
                        TUFI Store
                    </h2>
                    <p class="seccion-texto">Tu tienda online de figuritas sueltas</p>
                </div>
            </section>

            <!-- Novedades -->
            <section class="novedades seccion-clara">
                <div class="container text-center">
                    <h2 class="seccion-titulo">NOVEDADES</h2>

                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="/img/figuritas/figu_qatar_messi.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Figurita Messi</h5>
                                    <p class="card-text"></p>
                                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="/img/figuritas/figu_qatar_paredes.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Figurita Paredes</h5>
                                    <p class="card-text"></p>
                                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="/img/figuritas/figu_qatar_romero.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Figurita Romero</h5>
                                    <p class="card-text"></p>
                                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer id="contacto" class="contacto seccion-oscura text-center">
            <div class="container">
                <div class="row" style="position: relative; left: 250px;">
                    <div class="col-12 col-md-6" >
                        <p class="seccion-titulo">¡Contactanos!</p>
                        <p>Podemos ayudarte a encontrar esas figurita que estás buscando.</p>
                    </div>
                </div>
                <div class="row" style="position: relative; left: 250px;">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="FormControlInput1" class="form-label">Nombre</label>
                            <input class="form-control" type="text" placeholder="Ingresa tu nombre"
                                aria-label="default input example">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInput2" class="form-label">Dirección de Correo</label>
                            <input type="email" class="form-control" id="FormControlInput2"
                                placeholder="nombre@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea1" class="form-label">Consulta</label>
                            <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="form-cta" name="submit"> Enviar </button>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>