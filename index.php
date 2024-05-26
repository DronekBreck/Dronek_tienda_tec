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
        $consulta_clientes = mysqli_query($conexion, $query);
        $query = "select p.nombre as nombre,p.precio as precio,c.nombre as categoria from productos p inner join categorias c on c.id = p.categoria_id;";
        $consulta_productos = mysqli_query($conexion, $query);

        /*while($fila = mysqli_fetch_array($consulta)){
            echo $fila["nombre"];
        }*/
    ?>
    <h1>Bienvenido a su tiendita de tecnologia DDTECH</h1>
    <img src="./recursos/logo.jpg" alt="">
    <h3>clientes satisfechos</h3>
    <table>
        <tr>
            <th>Nombre</th>
        </tr>
    <?php
        while($fila = mysqli_fetch_array($consulta_clientes)){
            echo"<tr>";
            echo "<td>".$fila["nombre"]."</td>";
            echo"</tr>";

        }
    ?>
    </table>
    <table>
        <h3>nuestros productos</h3>
        <tr>
            <th>productos</th>
            <th>precio</th>
            <th>categoria</th>
        </tr>
    <?php
    while($fila = mysqli_fetch_array($consulta_productos)){
        echo"<tr>";
        echo "<td>".$fila["nombre"]."</td>";
        echo "<td>$".$fila["precio"]."</td>";
        echo "<td>".$fila["categoria"]."</td>";
        echo"</tr>";

    }
    ?>


    </table>

</body>
</html>