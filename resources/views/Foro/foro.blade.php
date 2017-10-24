@extends('layouts.app')
@section('content')
<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Atención!</strong> Para usar la función de foro debes dar click al enlace "Registrarse" o "Entrar" si ya eres usuario registrado.
</div>
	<div class="container">
		<a id="nabblelink" href="http://biopeb.24017.n8.nabble.com/">BioPEB</a>
		<script src="http://biopeb.24017.n8.nabble.com/embed/f1"></script>
	</div>
@endsection