<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include "conexao.php";
        
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            $imagem_temp = $_FILES['imagem']['tmp_name'];
            $imagem_data = file_get_contents($imagem_temp);

            $sql = "INSERT INTO tb_img (img) VALUES (:img)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':img', $imagem_data, PDO::PARAM_LOB);
            $stmt->execute();

            $last_id = $conn->lastInsertId();

            $sql = "INSERT INTO tb_galeria (id_img) VALUES (:id_img)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':id_img', $last_id);

            $stmt->execute();

            header("Location: ../PainelADM/gerenciarEvento.php");

        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Acesso Inválido";
}
?>