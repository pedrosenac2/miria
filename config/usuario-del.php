<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        include "conexao.php";

        $sql = "DELETE FROM tb_login WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
        header("Location: usuarios.php");
        exit();
}
?>