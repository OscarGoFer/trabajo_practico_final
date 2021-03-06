<?php

	/*
        autor: Grupo 3
		fecha de creación: 12/10/2020
		
        modificado por: Oscar Gómez
		fecha de modificación: 24/01/2021
		
		modificado por: ...
		fecha de modificación: ...

		...
    */

	include_once 'class.usuario.php';
	include_once 'class.usuario.control.php';
	include_once 'conexion.inc.php';
	
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">

		<title>Registro de usuarios</title>
	</head>

	<body>

		<!-- menú -->
		<div id="div-nav">
			<div class="container-md" id="menu">
				<nav class="navbar navbar-expand-lg navbar-dark">
		  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    			<span class="navbar-toggler-icon"></span>
		  			</button>
		  			<div class="collapse navbar-collapse" id="navbarNav">
		    			<ul class="navbar-nav">
		      				<li class="nav-item">
		        				<a class="nav-link active" href="">Registrar usuario</a>
		      				</li>
		    			</ul>
		  			</div>
				</nav>
			</div>
		</div>

		<!-- cuerpo de la página -->
		<div class="container-md" id="div-body">
			<div class="row">
				<div class="col-sm"></div>
				<div class="col-sm-6" style="padding: 0px;">
					<div id="div-head-form">
						<svg width="1em" style="margin-right: 3px;" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  							<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
						</svg>
						Registro de usuarios
					</div>
					<div id="div-form">
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm">

								<!-- formulario de registro de usuarios -->
								<form method="POST" name="formular_registro_usuario">

									<!-- input documento -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 6px; padding-left: 6px;">
											<label style="font-size: 85%"><b>Documento</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px;">
											<input type="text" name="documento" class="form-control input-width">
										</div>
									</div>

									<!-- input nombre -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 6px; padding-left: 6px;">
											<label style="font-size: 85%"><b>Nombre</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px;">
											<input type="text" name="nombre" class="form-control input-width">
										</div>
									</div>

									<!-- input apellido -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 6px; padding-left: 6px;">
											<label style="font-size: 85%"><b>Apellido</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px;">
											<input type="text" name="apellido" class="form-control input-width">
										</div>
									</div>

									<!-- input celular -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 6px; padding-left: 6px;">
											<label style="font-size: 85%"><b>Celular</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px;">
											<input type="tel" name="celular" class="form-control input-width">
										</div>
									</div>

									<!-- input correo -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 5px; padding-left: 5px;">
											<label style="font-size: 85%"><b>Correo electrónico</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 5px; padding-left: 5px;">
											<input type="email" name="correo_electronico" class="form-control input-width">
										</div>
									</div>

									<!-- input dirección -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 6px; padding-left: 6px;">
											<label style="font-size: 85%"><b>Dirección</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px;">
											<textarea rows="2" name="direccion" class="form-control input-width"></textarea>
										</div>
									</div>

									<!-- input contraseña -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm-4" style="padding-right: 6px; padding-left: 6px;">
											<label style="font-size: 85%"><b>Contraseña</b></label>
											<span style="color: #FB422F; font-size: 90%"> *</span>
										</div>
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px;">
											<div class="input-group mb-3">
										  		<div class="input-group-prepend">
										    		<button class="btn btn-outline-secondary form-control" type="button" style="width: 100px;" onclick="generar_contrasenha(8)">Generar
										    		</button>
										  		</div>
										  		<input type="text" name="contrasenha" class="form-control" aria-describedby="basic-addon1">
											</div>
										</div>
									</div>

									<!-- input cancelar y guardar -->
									<div class="row" style="margin-bottom: 5px;">
										<div class="col-sm" style="padding-right: 6px; padding-left: 6px; margin-bottom: 15px; text-align: center;">
											<input type="submit" name="registrar" value="Registrar" style="width: 100%;" class="btn form-control">
										</div>
									</div>
								</form>

								<?php
									if (isset($_POST['registrar'])) {
										if (isset($_POST['documento']) &&
											isset($_POST['nombre']) &&
											isset($_POST['apellido']) &&
											isset($_POST['celular']) &&
											isset($_POST['correo_electronico']) &&
											isset($_POST['direccion']) &&
											isset($_POST['contrasenha'])
										){
											$documento = $_POST['documento'];
											$nombre = $_POST['nombre'];
											$apellido = $_POST['apellido'];
											$celular = $_POST['celular'];
											$correo_electronico = $_POST['correo_electronico'];
											$direccion = $_POST['direccion'];
											$contrasenha = $_POST['contrasenha'];
											$usuario = new Usuario(	$documento,
																	$nombre,
																	$apellido,
																	$celular,
																	$correo_electronico,
																	$direccion,
																	$contrasenha
																);
											Conexion :: abrir_conexion();
											$conexion = Conexion :: obtener_conexion();
											$usuario_control = new Usuario_Control();
											$usuario_control -> registrar($conexion, $usuario);
											Conexion :: cerrar_conexion();
										}
									}

								?>
							</div>
							<div class="col-sm-1"></div>
						</div>
					</div>
				</div>
				<div class="col-sm"></div>
			</div>
		</div>

		<script type="text/javascript">
			function generar_contrasenha(longitud){
				let contrasenha = '';
				let letras = 'aabcdeefghiijklmnoopqrstuuvwxiiz';
				for (let i = 0; i < longitud; i++) {
					contrasenha += letras.charAt(Math.floor(Math.random() * letras.length));
				}
				formular_registro_usuario.contrasenha.value = contrasenha;
			}
		</script>

		<!--Javascript de boostrap-->
 		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	</body>
	
</html>