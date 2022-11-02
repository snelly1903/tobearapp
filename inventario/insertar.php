<?php 

    include '../php/conexion_be.php';

    $Cod = $_POST['Codigo'];
    $Nombre = $_POST['Nombre'];
    $Descrip = $_POST['Descrip'];
    $Marca = $_POST['Marca'];
    $Cantidad = $_POST['Cantidad'];
    $Precio = $_POST['Precio'];
    $Preciox1 = $_POST['Preciox1'];
    $id_admin = $_POST['id_admin'];

    $query = "INSERT INTO inventario( id_invent, nombre_produc, descrip_produc, marca_produc, canti_produc, precio_produc, preciox1, id_admin) 
    			VALUES('$Cod','$Nombre', '$Descrip', '$Marca', '$Cantidad', '$Precio', '$Preciox1','$id_admin')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Producto almacenado");
            window.location = "../admin/index.php#portfolio";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Producto no almacenado");
            window.location = "../admin/index.php#portfolio";
        </script>
    ';
}
'msqli_close'($conexion);
?>