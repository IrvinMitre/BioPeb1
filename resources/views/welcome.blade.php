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
    width: 90%;
    margin: 10px;
  }

  .fa-btn {
    margin-right: 30px;
  }
</style>
<!--Cuerpo de la pagina-->

<body>

<!--Introduccion-->
  <section class="intro">
    <div class="container">
      <article class="row">
        <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/buap-icon.png" alt="" class="img-circle">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
        </div>
      </article>
    </div>
  </section>

<!--Seccion de temas-->
  <section class="main">
    <div class="container">
      <div class="imagenes-menu">
        <article class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('Imagenes/actividades.jpg') }}" alt="prueba" class="img-rounded">
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
