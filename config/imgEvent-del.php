<?php
try {
    //code...
    if (empty($_GET['id'])) {
        throw new Exception("Não foi possivel atualizar, pois o ID não existe");
    }
    $id = $_GET['id'];

    include "conexao.php";

    $sql = "DELETE FROM tb_galeria WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        echo 'success';
    } else {
        throw new Exception("Não foi possível deletar a imagem.");
    }
    
} catch (Exception $e) {
    echo $e->getMessage();
}