@extends('layouts.app')

@section('content')
 
   <style>

.btn-default {
color: #333!important;
background-color: #fff!important;
border-color: #ccc!important;
}

.btn-default:hover {

/*background-color: #ffffcc!important;
*/
}
</style>
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://s3.amazonaws.com/imagesfun/v2/bootstrap.css">
  <link href="https://s3.amazonaws.com/imagesfun/v2/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>

        

<!--
 <div class="container">
        <div class="header">
        <ul class="nav nav-pills pull-right">
                <li><a href="http://thequizcreator.com/quiz/" class="hidden-xs">LANG-EN <img src="https://s3.amazonaws.com/imagesfun/usa.jpg"></a></li>
          <li class="active"><a href="http://postea.la/quiz/">VER MAS TESTS</a></li>
          <li><a class="hidden-xs" href="http://postea.la/quiz/crear/">CREAR MI PROPIO TEST</a></li>
       
        </ul>
        <a href="http://postea.la/quiz/"> <h3 class="text-muted">QuizMachine</h3></a>
      </div></div>
-->


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

      <h1>Creando...<small><br>Espere por favor...</small></h1>

<br><br>
 </div>
</div>


@endsection

 