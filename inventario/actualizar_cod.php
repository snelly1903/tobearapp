<?php 

    $conec = mysqli_connect("localhost", "root", "", "tobeerapp");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descrip = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $Preciox1 = $_POST['preciox1'];

    $actualizar = "UPDATE inventario SET nombre_produc = '$nombre', descrip_produc = '$descrip', marca_produc = '$marca', canti_produc = '$cantidad', precio_produc = '$precio', preciox1 = '$Preciox1'
            WHERE id_invent ='$id'";

    $ejecutar = mysqli_query($conec, $actualizar);
    
    if ($ejecutar) {
        echo '
            <script>
                alert("Producto Actualizado");
                window.location = "../admin/index.php#portfolio";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Producto no Actualizado");
                window.location = "../admin/index.php#portfolio";
            </script>
        ';
    }
    'msqli_close'($conexion);
?>