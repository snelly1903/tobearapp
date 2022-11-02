<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ToBeerApp Login-Admin </title>
	<script src="https://kit.fontawesome.com/07774c807b.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estiloADM.css">
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<main>
	<div class="contenedor__todo_admin">
		<div class="contenedor__login_admin">
			<!--Formulario de inicio de sesion-->
			<form action="php/adminIS.php" method="POST" class="formulario__login_admin">
				<h2>Iniciar Sesión Administrador </h2>
				<input type="text" required placeholder="Correo Electronico" name="correo_admin">
				<input type="password" required placeholder="Contraseña" name="contrasena_admin">
				<div class="alert"><b style="color:red; margin-top: 200px; padding:15px 10px 15px 50px; font-family:Arial, Helvetica, sans-serif; font-size:17px; text-align:left; color: #D8000C;">
						<?php 
       						session_start();
       						if(isset( $_SESSION['msga'])){
               					echo  $_SESSION['msga'];
              					unset($_SESSION['msga']);
        					}
						?>
					</b>
					</div>
				<button>Entrar</button>
			</form>
	    </div>
	</div>
	</main>
	<div class="boton-regresar">
			<a href='http://localhost/ToBeerApp/index.php' style='position:fixed;bottom:880px;left:10px;' title='cliente'><img src="img/13964.png" width="75" /></a>
		</div>
	</header>
</body>
</html>