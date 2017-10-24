@extends('layouts.app')
@section('content')
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
		top: 100;
		left: 0;
		width: 100%;
		height: 90%;
		background-image: linear-gradient(to top, rgba(19, 21, 25, 0.5), rgba(19, 21, 25, 0.5)), url("../../images/overlay.png");
		background-image: url("Imagenes/fondo.jpg");
		background-size:100% 100%;
		background-attachment: fixed;
	}	
	--></style>

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
<!--Cuerpo de la pagina-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<body>
	<section class="main">
	<div id="bg">
	<div class="container">
			<div style="float:left;width: 50%;">
				<img src="{{ asset('Imagenes/aviso.jpg') }}" alt="aviso" class="img-rounded">
			</div>
			<div style="float:left;width: 50%;">
				<div class="fb-page" data-href="https://www.facebook.com/Biopeb-938555042959343/" data-tabs="timeline" data-width="500" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Biopeb-938555042959343/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Biopeb-938555042959343/">Biopeb</a></blockquote></div>
			</div>
		</div>
		<div style="clear:both"></div>
	</section>
	</div>
	<script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
	<script src="bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
@endsection
