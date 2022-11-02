<?php
	session_start();

	include 'conexion_be.php';

	$correo_admin = $_POST['correo_admin'];
	$contrasena_admin = $_POST['contrasena_admin'];
	//$contrasena = hash('sha512', $contrasena);

	$validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE correo_admin ='$correo_admin' AND contraseña_admin = '$contrasena_admin'");

	if (mysqli_num_rows($validar_login) > 0) {
		$_SESSION['administrador'] = $correo_admin;
		header("location: ../admin/index.php");
		exit;
	}else{
		header("location: ../admin.php");
		$_SESSION['msga'] = "Correo o contraseña invalido";
	}
?>