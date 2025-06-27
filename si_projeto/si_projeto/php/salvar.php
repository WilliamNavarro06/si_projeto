<?php
// Conectar com o banco
$host = 'localhost';
$db = 'imobiliaria';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db); // Objeto da conexão

// Verificar conexão
if ($conn->connect_error) { // Verifica erro na conexão (connect_error)
    die("Erro na conexão: " . $conn->connect_error);
}

// Pegar os dados do formulário
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$tipo = $_POST['tipo'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];

// Inserir no banco
$sql = "INSERT INTO imoveis VALUES ('$titulo', '$tipo', '$endereco', $numero, $valor, '$descricao')";

if ($conn->query($sql) === TRUE) { // QUERY = CONSULTA NO BANCO DE DADOS
    echo "<p>Imóvel cadastrado com sucesso!</p>";
    echo '<p><a href="php/listar.php">Ver Lista de Imóveis</a></p>';
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close(); // Metodo para fechar a conexão
?>

