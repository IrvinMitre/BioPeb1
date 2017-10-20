@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BioPEP BUAP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<style>
  section .imagenes-menu img{
    width: 100%;
    margin: 10px;
  }

  section .fa-btn {
    margin-right: 30px;
  }
  section .carousel{
    margin-top: 10px;
  }

  section .carousel .item{
      min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
  }
  section .carousel .item img{
    width: 100%;
      margin: 0 auto; /* Align slide image horizontally center */
  }

</style>
<!--Cuerpo de la pagina-->

<body>
<!--Seccion de temas-->
  <section class="main">
    <div class="container">

      <!--Seccion del carrucel-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
      <!--Seccion del carrucel-->

      <div class="imagenes-menu">
        <article class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <a href="{{ url('/actividades') }}"><img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded"></a>  
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
           <a href="{{ url('/contacto') }}"> <img src="{{ asset('Imagenes/contacto.jpg') }}" alt="prueba" class="img-rounded"></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <a href="{{ url('/contacto') }}"><img src="{{ asset('Imagenes/faqs.jpg') }}" alt="prueba" class="img-rounded"></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <a href="{{ url('/foro') }}"><img src="{{ asset('Imagenes/foro.jpg') }}" alt="prueba" class="img-rounded"></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <a href="{{ url('/lecturas') }}"><img src="{{ asset('Imagenes/lecturas.jpg') }}" alt="prueba" class="img-rounded"></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <a href="{{ url('/multimedia') }}"><img src="{{ asset('Imagenes/multimedia.jpg') }}" alt="prueba" class="img-rounded"></a>
          </div>
        </article>
      </div>
    </div>
  </section>



  <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
@endsection