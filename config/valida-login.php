<?php
    // echo "<pre>";
    // var_dump($_POST);


try{
    include "conexao.php";

    $email = $_POST['loginEmail'];
    $senha = $_POST['loginSenha'];

    if($email == ''){
        echo "Preencha o e-mail";
        exit;
    }

    if($senha == ''){
        echo "Preencha a senha";
        exit;
    }

    // query sql que sera executada no banco
    $sql = "SELECT * FROM tb_login WHERE email = '$email' AND BINARY senha = '$senha';";

    // prepara a execucao da query acima
    $stmt = $conn->prepare($sql);

    // executa a query
    $stmt->execute();

    // armazena o resultado da query executada acima
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);


    // inicia a sessao
    session_start();

    // cria uma variavel de sessao e define que o erro padrao e vazio
    $_SESSION['erro'] = '';
    // cria uma variavel de sessao email e adiciona o email digitado pelo usuario 
    $_SESSION['email'] = $email;

    // valida se a variavel $resultado e nula ou nao
    if($resultado !=null){
        // caso nao for nula, redireciona para o admin
        header("location: ../adm-test/admin-test.html");
    } else{
        // define na variavel de sessao erro a mensagem
        $_SESSION['erro'] = "Usuário ou senha incorretos!";
        // se for nula redireciona para a tela de login
        header("location: ../pages/login.php");
    }

} catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}




?>