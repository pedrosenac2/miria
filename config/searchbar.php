<?php
    include "../config/conexao.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $search = $_POST["searchbar"];
        $sql = "SELECT tb_ebooks.id ,tb_ebooks.nome, tb_ebooks.descricao, tb_ebooks.imagem 
        FROM tb_ebooks
        WHERE nome LIKE '%$search%' ";
    }else{
        $sql = "SELECT tb_ebooks.id ,tb_ebooks.nome, tb_ebooks.descricao, tb_ebooks.imagem FROM tb_ebooks";
    }

    $resultado = $conn->query($sql);
    if ($resultado) {
        $ebooks = $resultado->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "Erro na consulta: " . $conn->errorInfo();
    }
?>