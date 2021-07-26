<?php
include 'config/db.php';

session_start();

if (!$_SESSION['usuario']) {
    header("Location: index.php");
}

$sql = $pdo->prepare("SELECT * FROM clientes");
$sql->execute();

$clientes = [];

while ($res = $sql->fetch()) {
    $cliente = [
        'id' => $res['id'],
        'nombreyapellido' => $res['nombreyapellido'],
        'domicilio' => $res['domicilio'],
        'telefono' => $res['telefono'],
        'localidad' => $res['localidad'],
    ];

    array_push($clientes, $cliente);
}

include 'vistas/clientesadmin.view.php';