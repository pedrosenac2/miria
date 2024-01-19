<?php
// Inicia a sessão
session_start();

// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO cursos (nome, descricao, duracao, carga_horaria) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssii", 
$nome, $descricao, $duracao, $carga_horaria);

// Define os parâmetros e executa
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$duracao = $_POST['duracao'];
$carga_horaria = $_POST['carga_horaria'];

$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();

?>