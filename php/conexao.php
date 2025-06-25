<?php
// Configurações do banco
$host = 'localhost';
$db = 'imobiliaria';
$user = 'root';
$pass = 'root'; // ajuste se tiver senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao conectar no banco: " . $e->getMessage());
}
