<?php

include "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['nome'];
        $desc = $_POST['descricao'];
        $id_img = $_POST['imagem'];
        $id_video = $_POST['video'];

    $sql = "INSERT INTO tb_curso (nome, descricao, id_img, id_video) VALUES ('$name', '$desc', '$id_img', '$id_video')";
    $conn->query($sql);
} else{
    echo "Acesso Inválido";
}
?>