<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>
    <?php
        include_once '../conexion_bd.php';
        $query = "select p.id as id, p.nombre as nombre,p.precio as precio,c.nombre as categoria 
        from productos p inner join categorias c on c.id = p.categoria_id order by p.nombre;";
        $consulta_productos = mysqli_query($conexion, $query);
    
    ?>
    <div class="container">
        <h3>Nuestros Productos</h3>
        <table id="productos" class="table">
            <thead class='text-center'>
                <tr>
                    <th>productos</th>
                    <th>precio</th>
                    <th>categoria</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila = mysqli_fetch_array($consulta_productos)){
                        echo"<tr>";
                        echo "<td>".$fila["nombre"]."</td>";
                        echo "<td>$".$fila["precio"]."</td>";
                        echo "<td>".$fila["categoria"]."</td>";
                        echo "<td>";
                        echo "<a href="."fuente/crud/eliminar_producto.php?id=".$fila["id"].">";
                        echo "<button class='btn btn-danger'>eliminar</button>";
                        echo "</a>";
                        echo "</td>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="./fuente/agregar.php">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>
</body>
</html>
