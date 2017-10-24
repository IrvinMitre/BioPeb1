@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<title>Características de los virus</title>
<head>
  <meta charset="UTF-8">
  <title>BioPEP BUAP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<style type="text/css"><!--
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

	--></style>

<!--Cuerpo de la pagina-->

<body>
	<div id="bg"></div>
	<!--Seccion de actividades-->
	<section class="main">
		<div class="container">
			<div class="imagenes-menu">
				<article class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<a href="/crucigrama">
						<img src="{{ asset('Imagenes/cruz.jpg') }}" alt="actividades" class="img-rounded"></a>
						<a href="/cuestionario">
            <img src="{{ asset('Imagenes/test.jpg') }}" alt="actividades" class="img-rounded"></a>
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
