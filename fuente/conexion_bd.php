<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $bd = "tiendita";

    $conexion =new mysqli($servidor,$usuario,$contra,$bd);

    if ($conexion->connect_error) {
        die("conexion fallida". $conexion->connect_error);
    }

?>