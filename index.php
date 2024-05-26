<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "./fuente/conexion_bd.php";
        $query = "select nombre from clientes;";
        $consulta = mysqli_query($conexion, $query);
        /*while($fila = mysqli_fetch_array($consulta)){
            echo $fila["nombre"];
        }*/
    ?>
    <h1>Bienvenido a su tiendita de tecnologia DDTECH</h1>
    <h3>clientes satisfechos</h3>
    <table>
        <tr>
            <th>Nombre</th>
        </tr>
    <?php
        while($fila = mysqli_fetch_array($consulta)){
            echo"<tr>";
            echo "<td>".$fila["nombre"]."</td>";
            echo"</tr>";

        }
    ?>
    </table>

</body>
</html>