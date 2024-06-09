<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
        include_once "./fuente/conexion_bd.php";
        $query = "select nombre from clientes;";
        $consulta_clientes = mysqli_query($conexion, $query);

        /*while($fila = mysqli_fetch_array($consulta)){
            echo $fila["nombre"];
        }*/
    ?>
    <h1>Bienvenido a su tiendita de tecnologia DDTECH</h1>
    <img src="./recursos/logo.jpg" alt="">
    <a href="./fuente/crud/index_productos.php">nuestros productos</a>
    <h3>clientes satisfechos</h3>
    <table>
    <?php
        while($fila = mysqli_fetch_array($consulta_clientes)){
            echo"<tr>";
            echo "<td>".$fila["nombre"]."</td>";
            echo"</tr>";

        }
    ?>
    </table>
    <footer>
        <script href></script>
        <script></script>
    </footer>
    </div>
</body>
</html>