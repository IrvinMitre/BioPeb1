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
   <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<style type="text/css"><!--

	footer {
		background-color: #424242;
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 180px;
		color: white;
	}
  #bg{
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to top, rgba(19, 21, 25, 0.5), rgba(19, 21, 25, 0.5)), url("../../images/overlay.png");
        background-image: url("Imagenes/fondo.jpg"); 
        background-size:100% 100%;
        background-attachment: fixed;
    }
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
--></style>


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
                  <img src="{{ asset('Imagenes/s1.jpg') }}" alt="First Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('Imagenes/s2.jpg') }}" alt="Second Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('Imagenes/s3.jpg') }}" alt="Third Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('Imagenes/s4.jpg') }}" alt="Forth Slide" class="img-rounded">
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
<div class="footer"></div>

</html>
@endsection
