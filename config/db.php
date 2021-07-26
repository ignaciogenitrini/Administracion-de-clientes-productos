<?php

// CONECCION A LA BASE DE DATOS

try {
    $pdo = new PDO('mysql:host=localhost;dbname=practicados', 'root', '');
    return $pdo;
} catch (PDOException $e) {
    return $e->getMessage();
    die();
}