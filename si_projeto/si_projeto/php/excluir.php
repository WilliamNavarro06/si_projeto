<?php
require_once 'conexao.php';

if (!isset($_GET['id'])) {
    die("ID não informado.");
}

$id = intval($_GET['id']);

$stmt = $pdo->prepare("DELETE FROM imoveis WHERE id = ?");
$stmt->execute([$id]);

header('Location: listar.php');
exit;
