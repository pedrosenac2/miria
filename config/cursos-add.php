<?php
include "conexao.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['nome'];
    $descricao = $_POST['descricao'];

     $sql = "INSERT INTO tb_curso (nome, descricao) VALUES (:nome, :descricao)";
     $stmt = $conn->prepare($sql); 

     $stmt->bindParam(':nome', $name);
     $stmt->bindParam(':descricao', $descricao);

    $stmt->execute();

     header("Location: ../adm-test/admin-testc.html");
 }else{
     echo "Acesso Inválido";
 }
?>