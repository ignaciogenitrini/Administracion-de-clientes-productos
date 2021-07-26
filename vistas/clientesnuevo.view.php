<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articulos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Clientes</title>
</head>
<body>

<main>

    <div class="contenedor">

        <div>
            <h1 id="titulo">Agregar un nuevo Cliente</h1>
        </div>

        <div>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="login">
                
                <label for="usuario">Nombre y apellido</label>
                <input type="text" id="usuario" name="nombreapellido" placeholder="...">

                <label for="password">Domicilio</label>
                <input type="text" id="usuario" name="domicilio" placeholder="...">

                <label for="usuario">Telefono</label>
                <input type="text" id="usuario" name="telefono" placeholder="...">

                <label for="password">Localidad</label>
                <input type="text" id="usuario" name="localidad" placeholder="...">
                
                <input type="submit" value="Añadir cliente"><br><br>
                <a href="clientesadmin.php">Volver atras</a><br>

                <?php if (!empty($errores)) { echo $errores; } ?>

            </form>
            

        </div>

    </div>

    
</main>

</body>
</html>   