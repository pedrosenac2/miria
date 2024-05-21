<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data_evento = $_POST['data_evento'];
    $horario_evento = $_POST['horario_evento'];
    $localizacao = $_POST['localizacao'];

    try {

        if (empty($titulo) || empty($descricao) || empty($data_evento) || empty($horario_evento) || empty($localizacao)) {
            throw new Exception('os campos não foram preenchidos!!');
        }

        include "conexao.php";
        
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            $imagem_temp = $_FILES['imagem']['tmp_name'];
            $imagem_data = file_get_contents($imagem_temp);

            $sql = "INSERT INTO tb_img (img) VALUES (:img)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':img', $imagem_data, PDO::PARAM_LOB);
            $stmt->execute();

            $last_id = $conn->lastInsertId();

            $sql = "INSERT INTO tb_eventos (titulo, descricao, data_evento, horario_evento, localizacao, id_img) VALUES (:titulo, :descricao, :data_evento, :horario_evento, :localizacao, :id_img)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':data_evento', $data_evento);
            $stmt->bindParam(':horario_evento', $horario_evento);
            $stmt->bindParam(':localizacao', $localizacao);
            $stmt->bindParam(':id_img', $last_id);

            $stmt->execute();

            header("Location: ../PainelADM/index.php");

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