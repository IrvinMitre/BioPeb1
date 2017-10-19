@extends('layouts.app')

@section('content')

<div class="container">
    <h1>¿Qué orgánulo celular eres? </h1>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
              
                <div class="panel-body">
                   <form class="form-horizontal">
<fieldset>


<legend>  De todos estos futuribles, elige uno:</legend>
<!-- Primera pregunta -->
<div class="form-group">
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
Me gustaría poder ayudar a los demás de alguna manera, considero que todos debemos aportar cuanto podamos para construir un futuro mejor
    </label>
    </div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Me gustaría ser un director enrollado, de esos jefes que a la gente les motiva tener para trabajar
    </label>
    </div>
   <div class="radio">
    <label for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      Me gustaría poder ser famoso: escritor, actor... Pero nada de personajes tipo Sálvame
    </label>
    </div>
    <div class="radio">
    <label for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      ¿La verdad? No me imagino estas cosas todavía
    </label>
    </div> 
    <div class="radio">
    <label for="radios-4">
      <input type="radio" name="radios" id="radios-4" value="5">
      Quiero hacer algo que me estimule, que me permita crear, pensar; además, los logros en estos trabajos son más aplaudidos
    </label>
    </div> 
    <div class="radio">
    <label for="radios-5">
      <input type="radio" name="radios" id="radios-5" value="6">
      Ojalá pudiera trabajar en un lugar idílico, que me permita desconectar con la naturaleza
    </label>
    </div> 
  </div>
</div>

<legend> ¿Con qué color te sientes más identificado (no tiene por qué coincidir con tu color favorito)?
</legend>
<!-- Segunda pregunta -->
<div class="form-group">
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-7">
      <input type="radio" name="radios" id="radios-7" value="1">
     Verde
    </label>
    </div>
  <div class="radio">
    <label for="radios-8">
      <input type="radio" name="radios" id="radios-8" value="2">
     Morado
    </label>
    </div>
  <div class="radio">
    <label for="radios-9">
      <input type="radio" name="radios" id="radios-9" value="3">
      Rojo
    </label>
    </div>
    <div class="radio">
    <label for="radios-10">
      <input type="radio" name="radios" id="radios-10" value="4">
    Amarillo
    </label>
    </div>
     <div class="radio">
    <label for="radios-11">
      <input type="radio" name="radios" id="radios-11" value="5">
    Naranja
    </label>
    </div>
    <div class="radio">
    <label for="radios-12">
      <input type="radio" name="radios" id="radios-12" value="6">
    Marrón
    </label>
    </div>
  </div>
</div>

<legend> ¿Cómo te gusta relajarte?
</legend>
<!-- Quinta pregunta -->
<div class="form-group">
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-13">
      <input type="radio" name="radios" id="radios-13" value="1">
Yo nunca me relajo, siempre estoy al pie del cañón
    </label>
    </div>
  <div class="radio">
    <label for="radios-14">
      <input type="radio" name="radios" id="radios-14" value="2">
Escribiendo algo, escuchando música, viendo la tele...
    </label>
    </div>
  <div class="radio">
    <label for="radios-15">
      <input type="radio" name="radios" id="radios-15" value="3">
Comiendo
    </label>
    </div>
    <div class="radio">
    <label for="radios-16">
      <input type="radio" name="radios" id="radios-16" value="4">
  Yendo a correr cerca de los árboles, desconecto mucho
    </label>
    </div>
     <div class="radio">
    <label for="radios-17">
      <input type="radio" name="radios" id="radios-17" value="5"> 
Haciendo una actividad totalmente diferente a la que esté haciendo en ese momento
    </label>
    </div>
    <div class="radio">
    <label for="radios-18">
      <input type="radio" name="radios" id="radios-18" value="6">
Me gusta bastante hacer manualidades; aunque me sirve juguetear con un boli dejando la mente en blanco
    </label>
    </div>
  </div>
</div>

<legend> ¿Cómo te describirían tus amigos?
</legend>
<!-- Cuarta -->
<div class="form-group">
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-19">
      <input type="radio" name="radios" id="radios-19" value="1">
Dispuesto, siempre que puedo trato de ayudar
    </label>
    </div>
  <div class="radio">
    <label for="radios-20">
      <input type="radio" name="radios" id="radios-20" value="2">
   Quizá un poco loco, pero en el buen sentido: me encanta reírme de todo
    </label>
    </div>
  <div class="radio">
    <label for="radios-21">
      <input type="radio" name="radios" id="radios-21" value="3">
     Versátil, hago de todo
    </label>
    </div>
    <div class="radio">
    <label for="radios-22"
       <input type="radio" name="radios" id="radios-22" value="4">
    Activo, no paro
    </label>
    </div>
     <div class="radio">
    <label for="radios-23">
      <input type="radio" name="radios" id="radios-23" value="5">
    Líder, pero no autoritario
    </label>
    </div>
    <div class="radio">
    <label for="radios-24">
      <input type="radio" name="radios" id="radios-24" value="6">
     Raro, jejeje
    </label>
    </div>
  </div>
</div>

<legend> ¿Qué componente de una orquesta te impresiona más?
</legend>
<!-- Quinta pregunta -->
<div class="form-group">
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-25">
      <input type="radio" name="radios" id="radios-25" value="1">
El director
    </label>
    </div>
  <div class="radio">
    <label for="radios-26">
      <input type="radio" name="radios" id="radios-26" value="2">
Los arpistas
    </label>
    </div>
  <div class="radio">
    <label for="radios-27">
      <input type="radio" name="radios" id="radios-27" value="3">
 Siempre me quedo pensando en quién habrá colocado tantas sillas y de esa forma tan particular: ¡vaya trabajera!
    </label>
    </div>
    <div class="radio">
    <label for="radios-28">
      <input type="radio" name="radios" id="radios-28" value="4">
   Los violinistas
    </label>
    </div>
     <div class="radio">
    <label for="radios-29">
      <input type="radio" name="radios" id="radios-29" value="5">
   Los percusionistas
    </label>
    </div>
    <div class="radio">
    <label for="radios-30">
      <input type="radio" name="radios" id="radios-30" value="6">
   Los flautistas
    </label>
    </div>
  </div>
</div>

<!-- Button de aceptar -->
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Siguiente</button>
  </div>
</div>
</fieldset>
</form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection