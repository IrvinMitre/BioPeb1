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

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


  <link href="https://s3.amazonaws.com/imagesfun/v2/style.css" rel="stylesheet">
 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script>
duplicado=0;
triplicado=0;
var win = [0,0,0,0,0,0,0],max=0;

$( document ).ready(function() {
    
var preg=1;
$(".resp").click(function(){
    // console.log($(this).attr("r-value"));
    win[$(this).attr("r-value")] ++;
    //console.log(win[$(this).attr("r-value")]);
$("#preg"+preg).hide();preg++;
$("#preg"+preg).show();

if($("#preg"+preg).length==0){

for (key in win) {
//Manejo duplicados
if (win[key] == max) {
  if(duplicado==0){
    duplicado=key;
  }else{
     triplicado=key;
  }
}
if (win[key] > max) {max=win[key];mkey=key;duplicado=0;triplicado=0;}
}
$("#loading").show();
n=1;
if(duplicado!=0) {n=2; console.log("dupli");console.log(duplicado);console.log(mkey);}
if(triplicado!=0) n=3;
n=Math.floor((Math.random() * n) + 1);
if(n==1) window.location = "http://alegra.me/quiz2/resultado/179732/"+mkey+"/";
if(n==2) window.location = "http://alegra.me/quiz2/resultado/179732/"+duplicado+"/";
if(n==3) window.location = "http://alegra.me/quiz2/resultado/179732/"+triplicado+"/";
}
});
});
</script>

<div class="container">

<center>
</center>

   <div class="jumbotron text-center " id="preg1">
      <h4>¿Qué orgánulo celular eres?         <br>
         <small>Pregunta 1 de 6</small>
      </h4>
      <h2>De todos estos futuribles, elige uno:</h2>

      <div class="abajo btn-group-vertical btn-group btn-group-lg">
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="3">
               <small>Quiero hacer algo que me estimule, que me permita crear, pensar; además, los logros en estos trabajos son más aplaudidos</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="1">
               <small>Me gustaría ser un director enrollado, de esos jefes que a la gente les motiva tener para trabajar</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="5">
               <small>Me gustaría poder ser famoso: escritor, actor... Pero nada de personajes tipo Sálvame </small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="6">
               <small>¿La verdad? No me imagino estas cosas todavía</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="4">
               <small>Me gustaría poder ayudar a los demás de alguna manera, considero que todos debemos aportar cuanto podamos para construir un futuro mejor</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="2">
               <small>Ojalá pudiera trabajar en un lugar idílico, que me permita desconectar con la naturaleza</small>
            </button>
              
      </div><!-- b vert -->
      <div class="progress progress-striped short">
         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 16.666666666667%"></div>

      </div>

   </div> <!--fumbo-->

   <div class="jumbotron text-center invisible2" id="preg2">
      <h4>¿Qué orgánulo celular eres?         <br>
         <small>Pregunta 2 de 6</small>
      </h4>
      <h2>¿Con qué color te sientes más identificado (no tiene por qué coincidir con tu color favorito)?</h2>

      <div class="abajo btn-group-vertical btn-group btn-group-lg">
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="2">
               <small>Rojo</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="5">
               <small>Verde</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="6">
               <small>Marrón</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="1">
               <small>Morado</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="4">
               <small>Naranja</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="3">
               <small>Amarillo</small>
            </button>
              
      </div><!-- b vert -->
      <div class="progress progress-striped short">
         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 33.333333333333%"></div>

      </div>
 
   </div> <!--fumbo-->

   <div class="jumbotron text-center invisible2" id="preg3">
      <h4>¿Qué orgánulo celular eres?         <br>
         <small>Pregunta 3 de 6</small>
      </h4>
      <h2>¿Cómo te gusta relajarte?</h2>

      <div class="abajo btn-group-vertical btn-group btn-group-lg">
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="1">
               <small>Yo nunca me relajo, siempre estoy al pie del cañón</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="5">
               <small>Escribiendo algo, escuchando música, viendo la tele...</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="6">
               <small>Comiendo</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="2">
               <small>Yendo a correr cerca de los árboles, desconecto mucho</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="3">
               <small>Haciendo una actividad totalmente diferente a la que esté haciendo en ese momento</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="4">
               <small>Me gusta bastante hacer manualidades; aunque me sirve juguetear con un boli dejando la mente en blanco</small>
            </button>
              
      </div><!-- b vert -->
      <div class="progress progress-striped short">
         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>

      </div>
   </div> <!--fumbo-->

   <div class="jumbotron text-center invisible2" id="preg4">
      <h4>¿Qué orgánulo celular eres?         <br>
         <small>Pregunta 4 de 6</small>
      </h4>
      <h2>¿Cómo te describirían tus amigos?</h2>

      <div class="abajo btn-group-vertical btn-group btn-group-lg">
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="2">
               <small>Activo, no paro quieto</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="3">
               <small>Versátil, hago de todo</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="5">
               <small>Quizá un poco loco, pero en el buen sentido: me encanta reírme de todo</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="6">
               <small>Raro, jejeje</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="1">
               <small>Líder, pero no autoritario</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="4">
               <small>Dispuesto, siempre que puedo trato de ayudar</small>
            </button>
              
      </div><!-- b vert -->
      <div class="progress progress-striped short">
         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 66.666666666667%"></div>

      </div>
   </div> <!--fumbo-->

   <div class="jumbotron text-center invisible2" id="preg5">
      <h4>¿Qué orgánulo celular eres?         <br>
         <small>Pregunta 5 de 6</small>
      </h4>
      <h2>¿Qué componente de una orquesta te impresiona más?</h2>

      <div class="abajo btn-group-vertical btn-group btn-group-lg">
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="6">
               <small>Los flautistas</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="3">
               <small>Los percusionistas</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="5">
               <small>Los arpistas</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="4">
               <small>Siempre me quedo pensando en quién habrá colocado tantas sillas y de esa forma tan particular: ¡vaya trabajera!</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="1">
               <small>El director</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="2">
               <small>Los violinistas</small>
            </button>
              
      </div><!-- b vert -->
      <div class="progress progress-striped short">
         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 83.333333333333%"></div>

      </div>
   </div> <!--fumbo-->

   <div class="jumbotron text-center invisible2" id="preg6">
      <h4>¿Qué orgánulo celular eres?         <br>
       <h3>Se le rediccionara a una pagina externa</h3>
         <small>Pregunta 6 de 6</small>
        
      </h4>
      <h2>De estos planes, ¿cuál elegirías para un sábado libre?</h2>

      <div class="abajo btn-group-vertical btn-group btn-group-lg">
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="6">
               <small>Quedarme en casa</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="3">
               <small>Hacer una escapada con un par de amigos a una ciudad cercana y conocerla</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="1">
               <small>Organizar una cena en mi casa: yo preparo la comida y decoro la mesa</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="5">
               <small>Ir con unos amigos al cine, a ver un concierto, una obra de teatro...</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="4">
               <small>Pregunto a mis amigos y lo que más les apetezca, me gusta verlos felices</small>
            </button>
                        <button class="btn btn-default btn-group-link resp" style="white-space: normal;" r-value="2">
               <small>Quedar con unos amigos y hacer una ruta por el campo: ¡energía nueva!</small>
            </button>
              
      </div><!-- b vert -->
      <div class="progress progress-striped short">
         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>


<div id="loading" class="invisible2">
<br><br>

      <h1>Creando...Se le rediccionara a una pagina externa<small><br>Espere por favor...</small></h1>

<br><br>
 </div>
</div>
</body>

   
</html>

