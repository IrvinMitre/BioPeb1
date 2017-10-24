@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<title>Lecturas</title>
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

	</style>

<!--Cuerpo de la pagina-->

<body>
	<div id="bg"></div>
	<!--Seccion de lecturas-->
	<section class="main">
		<div class="container">
			<div class="imagenes-menu">
				<article class="row">

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Antibioticos</h2>
                <p>El empleo de compuestos orgánicos para el tratamiento de infecciones
                    se conoce desde la antigüedad. Existe constancia documental de la
                    utilización de extractos
                </p>
                <h6>Clic en la imagen para seguir leyendo!</h6>
              </div>
              <div class="panel-body">
                <a href="{{ asset('Docs/Antibioticos.pdf') }}">
    						<img src="{{ asset('Imagenes/antibioticos.jpg') }}" alt="lectura antibioticos" class="img-rounded">
              </div>
            </div>
          </div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Antisepsia</h2>
                <p>Ausencia total de microorganismos y esporas patógenos que causan
enfermedades. </h6>
              </div>
              <div class="panel-body">
                <a href="{{ asset('Docs/Antisepsia.pdf') }}">
    						<img src="{{ asset('Imagenes/antisepsia.jpg') }}" alt="lectura antisepsia " class="img-rounded">
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Desinfeccion</h2>
                <p>La esterilización es la eliminación o muerte de todos los
microorganismos que contiene un objeto o sustancia, y que se
encuentran acondicionados de tal forma que no pueden contaminarse
nuevamente.
</h6>
              </div>
              <div class="panel-body">
                <a href="{{ asset('Docs/Esterilizacion.pdf') }}">
    						<img src="{{ asset('Imagenes/desinfeccion.jpg') }}" alt="actividades" class="img-rounded">
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Esterilizacion</h2>
                <p>Todos los microorganismos son susceptibles, en distinto grado, a la
acción del calor. El calor provoca desnaturalización de proteínas, fusión
y desorganización de las membranas y/o procesos oxidativos
irreversibles en los microorganismos</h6>
              </div>
              <div class="panel-body">
                <a href="{{ asset('Docs/Esterilizacion.pdf') }}">
    						<img src="{{ asset('Imagenes/Esterilizacion.jpg') }}" alt="actividades" class="img-rounded">
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Vacunas</h2>
                <p>El proceso de globalización y la evolución del transporte aéreo facilitan
                  la movilidad de las personas entre las diferentes regiones del mundo en</p>
                <h6>Clic en la imagen para seguir leyendo!</h6>
              </div>
              <div class="panel-body">
                <a href="{{ asset('Docs/Vacunas.pdf') }}">
    						<img src="{{ asset('Imagenes/vacunas.jpg') }}" alt="actividades" class="img-rounded">
              </div>
            </div>
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
