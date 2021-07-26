<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminart.css">
    <title>Clientes Administracion</title>
</head>
<body>

    <div class="contenedor">

    <div>
        <h1 id="titulo">Bienvenido a la administración de clientes</h1>
        <p><a href="menu.php" id="menu">Menú</a></p>
    </div>


    <div class="enlaces">
            <a href="clientenuevo.php">Añadir Cliente</a>
    </div>

    <?php 
        if (!empty($clientes)) {
            //var_dump($articulos);

            foreach ($clientes as $key => $value) { ?>

        
            <table class="default">
                <tr>
                    <th>ID</th>
                    <th>Nombre/Apellido</th>
                    <th>Domicilio</th>
                    <th>Telefono</th>
                    <th>Localidad</th>

                </tr>

                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['nombreyapellido']; ?></td>
                    <td><?php echo $value['domicilio']; ?></td>
                    <td><?php echo $value['telefono']; ?></td>
                    <td><?php echo $value['localidad']; ?></td>
                    
                    <form action="">
                    <td><a href="clienteeditar.php?id=<?php echo $value['id']; ?>">Editar cliente</a></td>
                    <td><a href="clienteeliminar.php?id=<?php echo $value['id']; ?>">Eliminar</a></td>
                    </form>
                </tr>

            </table>
                

        <?php  }    } ?>
                

</body>
</html>