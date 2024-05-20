<?php
    if(isset($_GET["searchbar"])){
        $search = $_GET["searchbar"];
        $sql = "SELECT tb_ebooks.id ,tb_ebooks.nome, tb_ebooks.descricao, tb_ebooks.imagem 
        FROM tb_ebooks
        WHERE nome LIKE '%$search%' ";
    
        $resultado = $conn->query($sql);

        if ($resultado) {
            $ebooks = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
            // Converter o BLOB de imagem para base64
            foreach ($ebooks as &$ebook) {
                if (isset($ebook['imagem'])) {
                    $ebook['imagem'] = base64_encode($ebook['imagem']);
                }
            }
    
            // Retornar os resultados em formato JSON
            echo json_encode($ebooks);
        }
    }
?>