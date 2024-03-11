<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        include "conexao.php";

        $sql = "DELETE FROM tb_curso WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
        header("Location: ../adm-test/lista-cursos.php");
        exit();
}
?>