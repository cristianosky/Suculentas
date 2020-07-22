@extends('layouts.cli')

@section('content')
    
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
    
@endsection