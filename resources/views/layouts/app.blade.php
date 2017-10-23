<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BioPeb</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body .navbar {
         	font-family: 'Lato';
            background:#424242;
            
        }

        .fa-btn {
            margin-right: 30px;
        }
        

        footer {
        background-color: #424242;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 180px;
        color: white;
        }
        footer .imagen-footer img{
            width: 100%;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    BioPeb
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                            <ul class="nav navbar-nav">
                              <li>
								<a href="{{ url('/home') }}">
								<span class="glyphicon glyphicon-home"></span>
								Inicio</a></li>
                            </ul>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-th-list">
							Menu<span class="caret"></span>
                            </a>
							<ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/actividades') }}"></i>Actividades</a></li>
                                <li><a href="{{ url('/lecturas') }}">Lecturas</a></li>
                                <li><a href="{{ url('/foro') }}">Foro</a></li>
                                <li><a href="{{ url('/multimedia') }}">multimedia</a></li>
                                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                                <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>

                            </ul>
                            </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-user">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                                  <!-- JavaScripts 
                                <li><a href="{{ url('/perfil') }}">
								<span class="glyphicon glyphicon-user">
								Perfil</a></li>-->
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
      <div class="container">
        <div class="row">
          <div class="imagen-footer col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <img src="{{ asset('Imagenes/logoBuap.png') }}" alt="Escudo-BUAP">
          </div>
		 <div class="links de contacto col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <p><br><br></p>
         </div>
         <div class="links de contacto col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <p><span class="glyphicon glyphicon-envelope"></span> Contáctanos</p>
         </div>
		 <div class="links de contacto col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <p><span class="glyphicon glyphicon-leaf"></span> Acerca de</p>
         </div>
		 <div class="links de contacto col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <p><span class="glyphicon glyphicon-question-sign"></span> FAQ's</p>
         </div>
         <div align="right" class="links de contacto col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <p>Powered by BioPEB &copy 2017</p>
         </div>

        </div>
      </div>
    </footer>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
