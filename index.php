<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Login-y-Registro--ToBearApp </title>
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estiloIS.css">
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<main>
		<div class="contenedor__todo">

			<div class="caja__trasera">
				<div class="caja__trasera_login">
					<h3>¿Ya tienes cuenta?</h3>
					<p>Iniciar sesión para entrar a la pagina</p>
					<button id="btn_iniciar-secion">Iniciar Sesión</button>
				</div>
				<div class="caja__trasera_register">
					<h3>¿Aun no tienes cuenta?</h3>
					<p>Registrate para que puedas iniciar seción</p>
					<button id="btn_registrarse">Registrarse</button>
				</div>	
			</div>

			<div class="contenedor__login-register">
				<!--Formulario de inicio de sesion-->
				<form action="php/clienteIS.php" method="POST" class="formulario__login">
					<h2>Iniciar Sesión</h2>
					<input type="text" required placeholder="Correo Electronico" name="correo">
					<input type="password" required placeholder="Contraseña" name="contrasena">
					<div class="alert"><b style="color:red; margin-top: 200px; padding:15px 10px 15px 50px; font-family:Arial, Helvetica, sans-serif; font-size:17px; text-align:left; color: #D8000C;">
						<?php 
       						session_start();
       						if(isset( $_SESSION['msg'])){
               					echo  $_SESSION['msg'];
              					unset($_SESSION['msg']);
        					}
						?>
					</b>
					</div>
					<button>Entrar</button>
				</form>
				<!--Formulario de regitro-->
				<form action="php/clienteRG.php" method="POST" class="formulario__register">
					<h2>Registrarse</h2>
					<input type="text" required placeholder="Nombres" name="nombres" pattern="[A-Za-z]+">
					<input type="text" required placeholder="Apellidos" name="apellidos" pattern="[A-Za-z]+">
					<input type="text" required placeholder="Numero de Cedula" name="nu_cudula" pattern="[0-9]+">
					<input type="text" required placeholder="Numero de Telefono" name="nu_tel" pattern="[0-9]+">
					<input type="email" required placeholder="Correo Electronico" name="correo">
					<input type="password" required placeholder="Contraseña" name="contrasena">
					<button>Regitrarse</button>
				</form>
			</div>
		</div>
	</main>
	<header>
		<div class="boton-subir">
			<a href='http://localhost/ToBeerApp/admin.php' style='position:fixed;bottom:0px;right:0px;' title='admin'><img src="img/110181.png" width="75" /></a>
		</div>
	</header>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>