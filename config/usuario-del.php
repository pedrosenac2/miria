<?php
try{

    if(empty($_GET['id'])){
        throw new Exception("Selecione um registro válido para ser deletado!");
    }
  
    $id = $_GET['id'];

    include "conexao.php";

    $sql = "DELETE FROM tb_login WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();
    header("Location: usuarios.php");
    exit();

}
catch(Exception $e){
    echo $e->getMessage();

}
?>