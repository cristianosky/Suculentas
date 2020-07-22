<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/css.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div id="app">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="../img/logo.png" alt="" width="60px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Menu cliente -->
                            @guest
                                <li class="nav-item item1">
                                    <a class="nav-link" href="#">Suculentas</a>
                                </li>
                                <li class="nav-item item1">
                                    <a class="nav-link" href="#">Ortencias</a>
                                </li>
                                <li class="nav-item item1">
                                    <a class="nav-link" href="#">Cactus</a>
                                </li>
                                
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/user') }}">
                                            Agregar nuevo usuario
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>

                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Carrucel -->
            <div class="caru">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/img/1.jpg" class="d-block w-100 caru" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/img/2.jpg" class="d-block w-100 caru" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/img/3.jpg" class="d-block w-100 caru" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        
        
            <div class="somos">
                    <h2>¿Que es Suculentas Barranquillas?</h2>
                    <p>
                        es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de 
                        relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica
                        a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro 
                        de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en 
                        documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la 
                        creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con 
                        software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                    </p>
                </div>
                <div class="plantas">
                    <h4 class="name"> Categorias</h4>
                    <p class="name">Pulsa sobre la imagen para ver mas</p>
                    <div class="cac1">
                        <a href="#"><img src="/img/cac.jpg" class="cac " alt=""></a>
                        <h5 class="name">Cactus</h5>
                    </div>
                    <div class="cac1">
                        <a href="#"><img src="/img/orten.jpg" class="cac" alt=""></a>
                        <h5 class="name">Ortencias</h5>
                    </div>
                    <div class="cac1">
                            <a href="#"><img src="/img/Sucu.jpg" class="cac" alt=""></a>
                            <h5 class="name">Suculentas</h5>
                    </div>
                </div>
                <div class="somos">
                    <h2>Visión</h2>
                    <p>
                        es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de 
                        relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica
                        a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro 
                        de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en 
                        documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la 
                        creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con 
                        software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                    </p>
                </div>
                <div class="somos1">
                    <h2>Misión</h2>
                    <p>
                        es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de 
                        relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica
                        a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro 
                        de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en 
                        documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la 
                        creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con 
                        software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
                    </p>
                </div>

                
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        
       
    </body>
    <!-- Footer -->
        <footer class="page-footer font-small pt-4 footer" style="background-color: #7EE75C;">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
        
                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none pb-3">
        
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Contactanos</h5>
        
                <ul class="list-unstyled">
                    <li>
                    <a href="https://api.whatsapp.com/send?phone=573117217917" class="fo"><img src="/img/w.png" alt="" height="50px"></a><br>
                    </li>
                    <br>
                    <li>
                    <a href="https://www.instagram.com/suculentas_barranquilla/?hl=es-la"><img src="/img/i.svg" alt="" height="50px"></a><br>
                    </li>
                    <br>
                    <li>
                    <a href="https://www.facebook.com/suculentasba"><img src="/img/f.svg" alt="" height="50px"></a>
                    
                    </li>
                    
                </ul>
        
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
            </div>
            <!-- Footer Links -->
        
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright
            </div>
            <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
</html>
