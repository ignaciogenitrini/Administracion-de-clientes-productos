<?php

include 'config/db.php';

$id = ($_GET['id']) ? $_GET['id'] : null;

$sql = $pdo->prepare("DELETE FROM clientes WHERE id = :id");
$sql->execute([
    ':id' => $id,
]);

header("Location: clientesadmin.php");