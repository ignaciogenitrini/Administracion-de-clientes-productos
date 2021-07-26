<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Sistema de logeo</title>
</head>
<body>

<main>

    <div class="contenedor">

        <div>
            <h1 id="titulo">Bienvendio al sistema de Inicio de sesión</h1>
        </div>

        <div>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="login">
                
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="...">

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="...">
                
                <input type="submit" value="Logear"> <br>

                <?php if (!empty($errores)) { echo $errores; } ?>

            </form>
            

        </div>

    </div>

    
</main>

</body>
</html>   
