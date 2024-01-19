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

// Pega os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Criptografa a senha
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

// Prepara a consulta SQL para inserir o novo usuário
$sql = "INSERT INTO Administradores (email, senha) VALUES (?, ?)";

// Prepara a declaração
$stmt = $conn->prepare($sql);

// Vincula os parâmetros
$stmt->bind_param("ss", $email, $senha_criptografada);

// Executa a declaração
$stmt->execute();

// Fecha a declaração
$stmt->close();// Criptografa a senha
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

// Prepara a consulta SQL para inserir o novo usuário
$sql = "INSERT INTO Administradores (email, senha) VALUES (?, ?)";

// Prepara a declaração
$stmt = $conn->prepare($sql);

// Vincula os parâmetros
$stmt->bind_param("ss", $email, $senha_criptografada);

// Executa a declaração
$stmt->execute();

// Fecha a declaração
$stmt->close();
// Prepara a consulta SQL
$sql = "SELECT * FROM Administradores WHERE email = ?";

// Prepara a declaração
$stmt = $conn->prepare($sql);

// Vincula os parâmetros
$stmt->bind_param("s", $email);

// Executa a declaração
$stmt->execute();

// Obtém o resultado
$result = $stmt->get_result();

// Verifica se o usuário existe
if ($result->num_rows > 0) {
  // Obtém os dados do usuário
  $admin = $result->fetch_assoc();

  // Verifica a senha
  if (password_verify($senha, $admin['senha'])) {
    // A senha está correta, então inicia a sessão
    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['foto'] = $admin['foto'];
    header('Location: ../home_adm.html');
  } else {
    // A senha está incorreta
    echo "<script>alert('Senha incorreta! Por favor, tente novamente.');</script>";
  }
} else {
  // O usuário não existe
  echo "<script>alert('Email não encontrado! Por favor, tente novamente.');</script>";
}

$stmt->close();

?>