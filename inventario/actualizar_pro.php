<?php 

    $conec = mysqli_connect("localhost", "root", "", "tobeerapp");
    $id = $_GET["id"];
    $invent = "SELECT * FROM inventario WHERE id_invent = '$id'";

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <link rel="stylesheet" type="text/css" href="css/rd.css">
        <link rel="icon" type="image/png" href="../img/favicon.png">
    </head>
    <body>
        <h1>Inventario</h1>
        <br>
        <form action="actualizar_cod.php" method="POST" class="form_actualizar">
            <div class="todo">
                <div class="encabezados">Nombre</div>
                <div class="encabezados">Descripcion</div>
                <div class="encabezados">Marca</div>
                <div class="encabezados">Cantidad</div>
                <div class="encabezados">Precio</div>
                <div class="encabezados">Precio x 1</div>
                <div class="encabezados">Ocpcion</div>

                <?php 
                    $result = mysqli_query($conec, $invent);
                    while ($mostrar = mysqli_fetch_assoc($result)) {
                    
                ?>
                <input class="datos" type="hidden" value="<?php echo $mostrar['id_invent'] ?>" name="id">
                <input class="datos" type="text" value="<?php echo $mostrar['nombre_produc'] ?>"name="nombre">
                <input class="datos" type="text" value="<?php echo $mostrar['descrip_produc'] ?>"name="descripcion">
                <input class="datos" type="text" value="<?php echo $mostrar['marca_produc'] ?>"name="marca">
                <input class="datos" type="text" value="<?php echo $mostrar['canti_produc'] ?>"name="cantidad">
                <input class="datos" type="text" value="<?php echo $mostrar['precio_produc'] ?>"name="precio">
                <input class="datos" type="text" value="<?php echo $mostrar['preciox1'] ?> "name="preciox1">
                <input class="submit" type="submit" value="Actualizar">
                
                <?php 
                } mysqli_free_result($result);
                ?>
            </div>
        </form>
        <br>
        <a href="../admin/index.php#portfolio" class="volver">Volver Atrás</a>
    </body>
</html>