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
		height: 166px;
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
	  footer .imagen-footer img{
      width: 100%;}
        img {
    width: 100%;
  }

	--></style>

<!--Cuerpo de la pagina-->


</style>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="panel panel-default">
              <div class="panel-heading">
               <img src="{{ asset('Imagenes/usuario.png') }}" alt="1">
              </div>
              <div class="panel-body ">
                 Erick Paul Garcia Ramirez
                 <br><a href="https://twitter.com/EPaulGR">Twitter</a>
                 <br><a href="https://www.facebook.com/profile.php?id=100001125921635">Facebook</a>
                 <br><a href="https://www.instagram.com/epaulgr/">Instagram</a>
              </div>
          </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                <img src="{{ asset('Imagenes/usuario.png') }}" alt="2">
              </div>
              <div class="panel-body ">
                 Luis Adelfo Lobato Cázares
                 <br><a href="https://www.instagram.com/luis_lobatoczs/">Instagram</a>
                 <br><a href="https://www.facebook.com/luisadelfo.lobatocazares">Facebook</a>
              </div>
          </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="panel panel-default">
              <div class="panel-heading">
                <img src="{{ asset('Imagenes/usuario.png') }}" alt="3">
              </div>
              <div class="panel-body ">
                 Irvin Santiago Mitre Martinez
                 <br><a href="https://www.facebook.com/meison.dark">Facebook</a>
              </div>
          </div>
      </div>

    </div>

</div>

<body background-image: src="{{ asset('Imagenes/fondo.jpg') }}">
	<!--Seccion de actividades-->
	
	<section class="main">
		<div class="container">
			<h2>¿Qué es BioPEB?</h2><br>
			<h4>
			BioPEB es una plataforma web diseñada para brindar a los alumnos de preparatoria un espacio para que puedan acceder de forma sencilla
			y desde cualquier lugar a contenido educativo relacionado con sus estudios. Esta plataforma tiene un enfoque completo a  la materia de
			"Temas Selectos de Biología", esto la hace realmente eficiente ya que persigue un propósito específico.<br>
			Además esta plataforma ofrece al doscente a cargo la posibilidad de compartir con sus alumnos contenido que les permita reforzar los 
			temas abordados en clase.<br>
			En este espacio podrás encontrar actividades interactivas, un repositorio con notas relacionadas a los temas de estudio,
			contenido mlitimedia, un foro y un espacio donde encontraras anuncios referentes a la clase en concreto.<br><br>
			¿Qué necesitas para usar esta plataforma?<br>
			<ul>
				<li>Es indispensable ser alumno activo de la materia</li>
				<li>Estar registrado con una matriclia válida</li>
				<li>Computadora personal, laptop, tablet o smartphone.</li>
				<li>Navegador web con soporte para HTML 5 y JavaScript.</li>
			</ul>
			</h4>
		</div>
	</section>
	
	<script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
	<script src="bootstrap.min.js" charset="utf-8"></script>
		
</body>

</html>
@endsection

