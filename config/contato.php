<?php

// Conexão com o banco de dados (ajuste conforme suas configurações)
$host = "localhost";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "seu_banco";

$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se a conexão foi estabelecida com sucesso
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Recupera os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$departamento = $_POST['departamento'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$empresa = $_POST['empresa'];
$colaboradores = $_POST['colaboradores'];
$area_atuacao = $_POST['area_atuacao'];
$mensagem = $_POST['mensagem'];

// Insere os dados no banco de dados
$sql = "INSERT INTO contato (nome, email, departamento, cargo, telefone, empresa, colaboradores, area_atuacao, mensagem) 
        VALUES ('$nome', '$email', '$departamento', '$cargo', '$telefone', '$empresa', $colaboradores, '$area_atuacao', '$mensagem')";

if ($conexao->query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar a mensagem: " . $conexao->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();

?>

