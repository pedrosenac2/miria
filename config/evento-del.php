<?php
try {
    //code...
    if (empty($_GET['id'])) {
        throw new Exception("Não foi possivel atualizar, pois o ID não existe");
    }
    $id = $_GET['id'];

    include "conexao.php";

    $sql = "DELETE FROM tb_eventos WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();
    header("Location: ../PainelADM/index.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}