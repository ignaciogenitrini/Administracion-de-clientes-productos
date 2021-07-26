<?php

include 'config/db.php';

$id = ($_GET['id']) ? $_GET['id'] : null;

$sql = $pdo->prepare("DELETE FROM articulos WHERE id = :id");
$sql->execute([
    ':id' => $id,
]);

header("Location: articulosadmin.php");