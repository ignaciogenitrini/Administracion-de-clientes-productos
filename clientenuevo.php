<?php
include 'config/db.php';

session_start();

$errores = "";

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreapellido = filter_var($_POST['nombreapellido'], FILTER_SANITIZE_STRING);
    $domicilio = filter_var($_POST['domicilio'], FILTER_SANITIZE_STRING);
    $telefono = (!empty($_POST['telefono'])) ? $_POST['telefono'] : null;
    $localidad = filter_var($_POST['localidad'], FILTER_SANITIZE_STRING);

    if ($nombreapellido != null || $domicilio != null || $telefono != null || $localidad != null) {
        settype($telefono, "integer");

        $sql = $pdo->prepare("INSERT INTO clientes (id, nombreyapellido, domicilio, telefono, localidad) VALUES (:id ,:nombreyapellido, :domicilio, :telefono, :localidad);");
        $sql->execute([
            ':id' => null,
            ':nombreyapellido' => $nombreapellido,
            ':domicilio' => $domicilio,
            ':telefono' => $telefono,
            ':localidad' => $localidad,
        ]);

        header("Location: clientesadmin.php");

    } else {
        $errores .= "Lo siento no puedes ingresar datos vacios!";
    }
}

include 'vistas/clientesnuevo.view.php';
