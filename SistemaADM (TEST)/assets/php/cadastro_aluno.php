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
$dbname = "sistema";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO cursos (nome, foto, cpf, data_nascimento, sexo, documento, numero_rg, orgao_emissor, estado_emissor, cep, rua, bairro, numero, estado, cidade, celular, observacao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssssssissss", 
$nome, $email, 
$telefone, $senha, 
$foto, $cpf, 
$data_nascimento, 
$sexo, $documento, 
$numero_rg, $orgao_emissor, 
$estado_emissor, $cep, 
$rua, $bairro, $numero, 
$estado, $cidade, $celular, 
$observacao);

// Define os parâmetros e executa
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$foto = $_POST['foto'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$documento = $_POST['documento'];
$numero_rg = $_POST['numero_rg'];
$orgao_emissor = $_POST['orgao_emissor'];
$estado_emissor = $_POST['estado_emissor'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$celular = $_POST['celular'];
$observacao = $_POST['observacao'];

$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();

?>