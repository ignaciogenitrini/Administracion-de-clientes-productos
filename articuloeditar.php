<?php

session_start();
include 'config/db.php';

if (!$_SESSION['usuario']) {
    header("Location: index.php");
}


$id = ($_GET['id']) ? $_GET['id'] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descrip = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    $proveedor = filter_var($_POST['proveedor'], FILTER_SANITIZE_STRING);
    $compra = (!empty($_POST['compra'])) ? $_POST['compra'] : null;
    $venta = (!empty($_POST['venta'])) ? $_POST['venta'] : null;
    $stock = (!empty($_POST['stock'])) ? $_POST['stock'] : null;

    if ($descrip != null || $proveedor != null || $compra != null || $venta != null || $stock != null) {
        settype($compra, "float");
        settype($venta, "float");
        settype($stock, "integer");

        $sql = $pdo->prepare("UPDATE articulos SET descripcion = :descripcion, proveedor = :proveedor, preciocompra = :preciocompra, precioventa = :precioventa, stock = :stock");
        $sql->execute([
            ':descripcion' => $descrip,
            ':proveedor' => $proveedor,
            ':preciocompra' => $compra,
            ':precioventa' => $venta,
            ':stock' => $stock
        ]);

        header("Location: articulosadmin.php");

    } else {
        $errores .= "Lo siento no puedes ingresar datos vacios!";
    }
} else {

    if ($id != null) {
        $sql = $pdo->prepare("SELECT * FROM articulos WHERE id = :id");
        $sql->execute([
            ':id' => $id,
        ]);

        $res = $sql->fetch();
    }
}

include 'vistas/articuloeditar.view.php';
