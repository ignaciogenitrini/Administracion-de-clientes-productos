<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articulos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Articulos</title>
</head>
<body>

<main>

    <div class="contenedor">

        <div>
            <h1 id="titulo">Editar articulo</h1>
        </div>

        <div>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="login">
                
                <label for="usuario">Descripcion</label>
                <input type="text" id="usuario" name="descripcion" placeholder="..." value="<?php echo $res['descripcion']; ?>">

                <label for="password">Proveedor</label>
                <input type="text" id="usuario" name="proveedor" placeholder="..." value="<?php echo $res['proveedor']; ?>">

                <label for="usuario">Precio Compra</label>
                <input type="text" id="usuario" name="compra" placeholder="..." value="<?php echo $res['preciocompra']; ?>">

                <label for="password">Precio Venta</label>
                <input type="text" id="usuario" name="venta" placeholder="..." value="<?php echo $res['precioventa']; ?>">

                <label for="password">Stock</label>
                <input type="text" id="usuario" name="stock" placeholder="..." value="<?php echo $res['stock']; ?>">

                
                <input type="submit" value="Añadir articulo"><br>
                <a href="articulosadmin.php">Volver atras</a><br>

                <?php if (!empty($errores)) { echo $errores; } ?>

            </form>
            

        </div>

    </div>

    
</main>

</body>
</html>   