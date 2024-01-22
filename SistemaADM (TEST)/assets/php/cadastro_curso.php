<?php
// Inicia a sessão
session_start();

// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO cursos () VALUES ()");
$stmt->bind_param("",);

// Define os parâmetros e executa
$exemplo = $_POST['nome'];

$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();

?>