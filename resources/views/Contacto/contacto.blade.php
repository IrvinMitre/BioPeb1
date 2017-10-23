@extends('layouts.app')
@section('content')
	<style type="text/css"><!--
	  #bg{
		content: '';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-image: linear-gradient(to top, rgba(19, 21, 25, 0.5), rgba(19, 21, 25, 0.5)), url("../../images/overlay.png");
		background-image: url("Imagenes/fondo2.jpg"); 
		background-size:100% 100%;
		background-attachment: fixed;
	}
/* Form */

	form {
		margin: 0 0 2.5rem 0;
	}

		form .field {
			margin: 0 0 1.5rem 0;
		}

			form .field.half {
				width: 50%;
				float: left;
				padding: 0 0 0 0.75rem;
			}

				form .field.half.first {
					padding: 0 0.75rem 0 0;
				}

		form > .actions {
			margin: 1.875rem 0 0 0 !important;
		}

		@media screen and (max-width: 736px) {

			form .field {
				margin: 0 0 1.125rem 0;
			}

				form .field.half {
					padding: 0 0 0 0.5625rem;
				}

					form .field.half.first {
						padding: 0 0.5625rem 0 0;
					}

			form > .actions {
				margin: 1.5rem 0 0 0 !important;
			}

		}

		@media screen and (max-width: 480px) {

			form .field.half {
				width: 100%;
				float: none;
				padding: 0;
			}

				form .field.half.first {
					padding: 0;
				}

		}

	label {
		color: #ffffff;
		display: block;
		font-size: 0.8rem;
		font-weight: 300;
		letter-spacing: 0.2rem;
		line-height: 1.5;
		margin: 0 0 1rem 0;
		text-transform: uppercase;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	input[type="tel"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
		-webkit-transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
		-ms-transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
		transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
		background: transparent;
		border-radius: 4px;
		border: solid 1px #ffffff;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1rem;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		input[type="tel"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		input[type="tel"]:focus,
		select:focus,
		textarea:focus {
			background: rgba(255, 255, 255, 0.075);
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #ffffff;
		}

	select option {
		background: #1b1f22;
		color: #ffffff;
	}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			color: #ffffff;
			content: '\f107';
			display: block;
			height: 2.75rem;
			line-height: calc(2.75rem + 0em);
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75rem;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75rem;
	}

	textarea {
		padding: 0.75rem 1rem;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2rem;
		opacity: 0;
		width: 1rem;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
			user-select: none;
			color: #ffffff;
			cursor: pointer;
			display: inline-block;
			font-size: 0.8rem;
			font-weight: 300;
			margin: 0 0 0.5rem 0;
			padding-left: 2.65rem;
			padding-right: 0.75rem;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
				-webkit-transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
				-ms-transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
				transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease-in-out;
				border-radius: 4px;
				border: solid 1px #ffffff;
				content: '';
				display: inline-block;
				height: 1.65rem;
				left: 0;
				line-height: calc(1.58125rem + 0em);
				position: absolute;
				text-align: center;
				top: -0.125rem;
				width: 1.65rem;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			background: #ffffff !important;
			border-color: #ffffff !important;
			color: #1b1f22;
			content: '\f00c';
		}

		input[type="checkbox"]:focus + label:before,
		input[type="radio"]:focus + label:before {
			background: rgba(255, 255, 255, 0.075);
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #ffffff;
		}

	input[type="checkbox"] + label:before {
		border-radius: 4px;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	:-moz-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	::-moz-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	.formerize-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}
	--></style>
<html>
	<head>
		<tittle>
		</tittle>
	</head>
<body>
	<div id=bg>
	<div class="container">
		<section>
			<h3 class="major">Contactar con Soporte</h3>
			<form method="post" action="#">
				<div class="field half first">
					<label for="demo-name">Nombre</label>
					<input type="text" name="demo-name" id="demo-name" value="" placeholder="Nombre y apellidos completos" />
				</div>
				<div class="field half">
					<label for="demo-email">eMail</label>
					<input type="email" name="demo-email" id="demo-email" value="" placeholder="tuCorreo@ejemplo.com" />
				</div>
				<div class="field">
					<label for="demo-category">Asunto</label>
					<div class="select-wrapper">
						<select name="demo-category" id="demo-category">
							<option value="">Da click aquí para seleccionar asunto</option>
							<option value="1">Reportar un error</option>
							<option value="1">Olvidé mi contraseña</option>
							<option value="1">Otro...</option>
						</select>
					</div>
				</div>
				<div class="field half first">
					<input type="radio" id="demo-priority-low" name="demo-priority" checked>
					<label for="demo-priority-low">Prioridad Normal</label>
				</div>
				<div class="field half">
					<input type="radio" id="demo-priority-high" name="demo-priority">
					<label for="demo-priority-high">Urgente</label>
				</div>
				<div class="field">
					<label for="demo-message">Mensaje</label>
					<textarea name="demo-message" id="demo-message" placeholder="Ingresa aquí tu mensaje" rows="6"></textarea>
				</div>
				<div class="field half first">
					<input type="checkbox" id="demo-copy" name="demo-copy">
					<label for="demo-copy">Enviarme una copia</label>
				</div>
				<ul class="actions">
					<a href="mailto:biopeb.000webhostapp.com">
						<input type="submit" class="btn btn-primary" value="Enviar mensaje">
					</a>
					<input type="reset" class="btn btn-danger" value="Borrar">
				</ul>
			</form>
		</section>
	</div>
	</div>
</body>
</html>
@endsection
