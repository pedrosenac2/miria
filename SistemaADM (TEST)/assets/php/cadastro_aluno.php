<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
$stmt = $conn->prepare("INSERT INTO Alunos (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", 
$nome, $email, $senha);

// Define os parâmetros e executa
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();

?>