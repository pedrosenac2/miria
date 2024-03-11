<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['loginEmail'];
    $senha = $_POST['loginSenha'];
    $confirmaSenha = $_POST['confirmaSenha'];

        session_start();

        $_SESSION['erro'] = '';
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;

        if($senha != $confirmaSenha){
            $_SESSION['erro'] = "As senhas nao coincidem!";
            header("Location: ../pages/cadastro.php");
        }else{
            $senha_criptografada = sha1($senha);
            $sql = "INSERT INTO tb_login (nome, email, senha) VALUES (:nome, :loginEmail, :loginSenha)";

            $stmt = $conn->prepare($sql);
        
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':loginEmail', $email);
            $stmt->bindParam(':loginSenha', $senha_criptografada);
            
            $stmt->execute();

            $_SESSION['erro'] = "Cadastro realizado com sucesso!";

            header("Location: ../pages/login.php");
        }

} else{
echo "Acesso Inválido";
}


?>