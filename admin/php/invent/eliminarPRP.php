<?php 

    $conec = mysqli_connect("localhost", "root", "", "tobeerapp");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM inventario WHERE id_invent='$id'";

    $resultado = mysqli_query($conec, $eliminar);

    if ($resultado) {
		header("location: ../../index.php#portfolio");
	}else{
		echo '
			<script>
				alert("Producto no eliminado");
				window.location = "../../index.php#portfolio";
			</script>
		';
	}
?>