<?php
include 'config/db.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

$sql = $pdo->prepare("SELECT * FROM articulos");
$sql->execute();

$articulos = [];

while ($res = $sql->fetch()) {
    $articulo = [
        'id' => $res['id'],
        'descripcion' => $res['descripcion'],
        'proveedor' => $res['proveedor'],
        'preciocompra' => $res['preciocompra'],
        'precioventa' => $res['precioventa'],
        'stock' => $res['stock'],
    ];

    array_push($articulos, $articulo);
}

include 'vistas/articulosadmin.view.php';