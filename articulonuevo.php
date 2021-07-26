<?php
include 'config/db.php';

session_start();

$errores = "";

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

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

        $sql = $pdo->prepare("INSERT INTO articulos (id, descripcion, proveedor, preciocompra, precioventa, stock) VALUES (:id ,:descripcion, :proveedor, :preciocompra, :precioventa, :stock);");
        $sql->execute([
            ':id' => null,
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
}

include 'vistas/articulonuevo.view.php';
