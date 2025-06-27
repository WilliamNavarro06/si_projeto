<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $preco = floatval($_POST['preco'] ?? 0);
    $area = !empty($_POST['area']) ? floatval($_POST['area']) : null;
    $quartos = !empty($_POST['quartos']) ? intval($_POST['quartos']) : 0;
    $banheiros = !empty($_POST['banheiros']) ? intval($_POST['banheiros']) : 0;
    $garagem = !empty($_POST['garagem']) ? intval($_POST['garagem']) : 0;
    $status = $_POST['status'] ?? 'disponível';

    $sql = "UPDATE imovel SET
        titulo = :titulo,
        descricao = :descricao,
        endereco = :endereco,
        preco = :preco,
        area = :area,
        quartos = :quartos,
        banheiros = :banheiros,
        garagem = :garagem,
        status = :status
        WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titulo' => $titulo,
        ':descricao' => $descricao,
        ':endereco' => $endereco,
        ':preco' => $preco,
        ':area' => $area,
        ':quartos' => $quartos,
        ':banheiros' => $banheiros,
        ':garagem' => $garagem,
        ':status' => $status,
        ':id' => $id
    ]);

    header('Location: listar.php');
    exit;
} else {
    die("Método inválido.");
}
