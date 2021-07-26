<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminart.css">
    <title>Articulos Administracion</title>
</head>
<body>

    <div class="contenedor">

    <div>
        <h1 id="titulo">Bienvenido a la administración de articulos</h1>
        <p><a href="menu.php" id="menu">Menú</a></p>
    </div>


    <div class="enlaces">
            <a href="articulonuevo.php">Añadir articulo</a>
    </div>

    <?php 
        if (!empty($articulos)) {
            //var_dump($articulos);

            foreach ($articulos as $key => $value) { ?>

        
        <table class="default">
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Proveedor</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Stock</th>

            </tr>

            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['descripcion']; ?></td>
                <td><?php echo $value['proveedor']; ?></td>
                <td><?php echo $value['preciocompra']; ?></td>
                <td><?php echo $value['precioventa']; ?></td>
                <td><?php echo $value['stock']; ?></td>
                
                <form action="">
                <td><a href="articuloeditar.php?id=<?php echo $value['id']; ?>">Editar articulo</a></td>
                <td><a href="articuloeliminar.php?id=<?php echo $value['id']; ?>">Eliminar</a></td>
                </form>
            </tr>

        </table>
                

        <?php  }    } ?>


</body>
</html>