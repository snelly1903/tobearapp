<?php

	include 'conexion_be.php';

	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$nu_cudula = $_POST['nu_cudula'];
	$nu_tel = $_POST['nu_tel'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	//Encriptacion de contraseña
	//$contrasena = hash('sha512', $contrasena);

	$query = "INSERT INTO cliente(id_cliente, nombre_cliente, apellido_cliente, correo_cliente, contraseña_cliente, tel_cliente) 
			VALUES('$nu_cudula', '$nombres', '$apellidos', '$correo', '$contrasena', '$nu_tel')";

			//verificacion de credenciales (correo)
	$verificacion_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo_cliente='$correo'");

	if (mysqli_num_rows($verificacion_correo) > 0) {
		echo '
			<script>
				alert("Correo ya registrado");
				window.location = "../index.php";
			</script>
		';
		exit();
	}

	$ejecutar = mysqli_query($conexion, $query);

	if ($ejecutar) {
		echo '
			<script language="JavaScript">
				alert("Registro exitoso");
				window.location = "../index.php";
			</script>
		';
	}else{
		echo '
			<script language="JavaScript">
				alert("Usuario no almacenado");
				window.location = "../index.php";
				
			</script>
		';
	}
	'msqli_close'($conexion);
?>