<?php
    include "conexao.php";

    try {
        $sql = "SELECT * FROM tb_galeria";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $json = json_encode($dados,JSON_UNESCAPED_UNICODE);
        echo $json;
        
    } catch (PDOException $e) {
        $resposta = array('STATUS'=>'0','MSG'=>'Erro ao listar as imagens!' .$e.'');
        $json = json_encode($resposta, JSON_UNESCAPED_UNICODE);
        echo $json;
    }
?>