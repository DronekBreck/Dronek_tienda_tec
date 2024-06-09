<?php
    include_once "../conexion_bd.php";
    $nombre= $_POST["nombre"];
      /*echo $_POST["nombre"];
        echo $_POST["precio"];
        echo $_POST["categoria"];*/
    $sql = "INSERT INTO productos (nombre,precio,categoria_id) VALUES ("
    ."'".$_POST["nombre"].", "
    .$_POST["precio"].", "
    .$_POST["categoria"]."); ";

    $insercion = mysqli_query($conexion, $sql);
    //$insercion->exec();
    header("Location: ../../");
?>