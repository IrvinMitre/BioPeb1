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
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <img src="{{ asset('Imagenes/slide1.jpg') }}" alt="First Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('Imagenes/slide2.jpg') }}" alt="Second Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('Imagenes/slide3.jpg') }}" alt="Third Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('Imagenes/slide4.jpg') }}" alt="Forth Slide" class="img-rounded">
              </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
      <!--Seccion del carrucel-->

  </section>



  <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
@endsection
