<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['loginEmail'];
        $senha = $_POST['loginSenha'];
        $confirmaSenha = $_POST['confirmaSenha'];
        $id = $_POST['id'];

        session_start();

        $_SESSION['erro'] = '';
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;

        if($senha != $confirmaSenha){
            $_SESSION['erro'] = "As senhas nao coincidem!";
            header("Location: usuario-edit.php?id=".$id);
        }else{
            include "conexao.php";

            $senha_criptografada = sha1($senha);
            $stmt = $conn->prepare("UPDATE tb_login SET nome = :nome, email = :email, senha = :senha WHERE id = :id");


            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha_criptografada);
            $stmt->bindParam(':id', $id);

            $stmt->execute();

            header("Location: usuarios.php");
        }
        
    }else{
        echo "Acesso inválido";
        header("Location: usuarios.php");
    }



?>