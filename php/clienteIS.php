<?php
	session_start();

	include 'conexion_be.php';

	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	//$contrasena = hash('sha512', $contrasena);

	$validar_login = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo_cliente ='$correo' AND contraseña_cliente = '$contrasena'");

	if (mysqli_num_rows($validar_login) > 0) {
		$_SESSION['cliente'] = $correo;
		header("location: ../cliente/index.php");
		exit;
	}else{
		header("location: ../index.php");
		$_SESSION['msg'] = "Correo o contraseña invalido";
	}
?>