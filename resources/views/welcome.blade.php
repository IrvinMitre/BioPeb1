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

<!--Cuerpo de la pagina-->

<body>
  <header>
    <div class="container">
      <h1>BioPEP BUAP</h1>
    </div>
  </header>

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
      <article class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/skull.jpg" alt="prueba" class="img-rounded">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/skull.jpg" alt="prueba" class="img-rounded">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/skull.jpg" alt="prueba" class="img-rounded">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/skull.jpg" alt="prueba" class="img-rounded">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/skull.jpg" alt="prueba" class="img-rounded">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <img src="imagenes/skull.jpg" alt="prueba" class="img-rounded">
        </div>
      </article>
    </div>
  </section>


  <aside class="">
    <div class="container">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </aside>

<!--Pie de pagina-->
  <footer>
    <div class="container">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </footer>
  </div>

  <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
@endsection
