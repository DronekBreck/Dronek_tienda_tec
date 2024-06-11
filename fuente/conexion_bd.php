<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $bd = "tiendita";

    $conexion =new mysqli($servidor, $usuario, $contra, $bd);

    if ($conexion->connect_error) {
        echo "conexion fallida". $conexion->error;
    }

?>
