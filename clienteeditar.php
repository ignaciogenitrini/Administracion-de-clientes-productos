<?php

session_start();
include 'config/db.php';

if (!$_SESSION['usuario']) {
    header("Location: index.php");
}

$id = ($_GET['id']) ? $_GET['id'] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreapellido = filter_var($_POST['nombreapellido'], FILTER_SANITIZE_STRING);
    $domicilio = filter_var($_POST['domicilio'], FILTER_SANITIZE_STRING);
    $telefono = (!empty($_POST['telefono'])) ? $_POST['telefono'] : null;
    $localidad = filter_var($_POST['localidad'], FILTER_SANITIZE_STRING);

    if ($nombreapellido != null || $domicilio != null || $telefono != null || $localidad != null) {
        settype($telefono, "integer");

        $sql = $pdo->prepare("UPDATE clientes SET nombreyapellido = :nombreyapellido, domicilio = :domicilio, telefono = :telefono, localidad = :localidad");
        $sql->execute([
            ':nombreyapellido' => $nombreapellido,
            ':domicilio' => $domicilio,
            ':telefono' => $telefono,
            ':localidad' => $localidad,
        ]);

        header("Location: clientesadmin.php");

    } else {
        $errores .= "Lo siento no puedes ingresar datos vacios!";
    }

}  else {

    if ($id != null) {
        $sql = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
        $sql->execute([
            ':id' => $id,
        ]);

        $res = $sql->fetch();
    }
}

include 'vistas/clienteseditar.view.php';
