<?php
include 'config/db.php';

session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: menu.php");
}

$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? null;
    $pass = $_POST['password'] ?? null;

    if ($usuario != null && $pass != null) {

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = :usuario AND pass = :password");
        $sql->execute(array(
            ':usuario' => $usuario,
            ':password' => $pass,
        ));
        
        $result = $sql->fetchAll();

        if (!empty($result)) {
            $_SESSION['usuario'] = $usuario;
            header("Location: menu.php");
        } else {
            $errores .= "Lo siento los datos son incorrectos";
        }

    } else {
        $errores .= "Lo siento los campos estan vacios!";
    }
}


include 'vistas/login.view.php';