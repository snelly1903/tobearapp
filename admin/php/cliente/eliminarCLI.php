<?php 

    $conec = mysqli_connect("localhost", "root", "", "tobeerapp");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM cliente WHERE id_cliente='$id'";

    $resultado = mysqli_query($conec, $eliminar);

    if ($resultado) {
		echo '
			<script>
				alert("Cliente Eliminado eliminado);
				window.location = "../index.html";
			</script>
		';
	}else{
		echo '
			<script>
				alert("Cliente no eliminado");
				window.location = "../index.html";
			</script>
		';
	}
?>