<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $data_evento = $_POST['data_evento'];
    $horario_evento = $_POST['horario_evento'];
    $localizacao = $_POST['localizacao'];
    $id = $_POST["id"];
    $id_img = $_POST["id_img"];

    try {
        //code...
        if (empty($titulo) || empty($descricao) || empty($data_evento) || empty($horario_evento) || empty($localizacao) || empty($id_img)) {
            throw new Exception("Erro, todos os campos são obrigatórios");
        }

        include "conexao.php";

        $stmt = $conn->prepare("UPDATE tb_evento SET titulo = :titulo, descricao = :descricao, data_evento = :data_evento, horario_evento = :horario_evento, localizacao = :localizacao WHERE id = :id");
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":data_evento", $data_evento);
        $stmt->bindParam(":horario_evento", $horario_evento);
        $stmt->bindParam(":localizacao", $localizacao);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            // Obtém o caminho do arquivo temporário
            $imagem_temp = $_FILES['imagem']['tmp_name'];

            // Lê o conteúdo do arquivo
            $imagem_data = file_get_contents($imagem_temp);

            // Atualiza a imagem na tabela tb_img
            $stmt = $conn->prepare("UPDATE tb_img SET img = :img WHERE id = :id");
            $stmt->bindParam(":img", $imagem_data, PDO::PARAM_LOB);
            $stmt->bindParam(":id", $id_img);
            $stmt->execute();

        }

        header("location: ../PainelADM/index.php");

    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {

    echo "Acesso invalido";
    header("location: listagem.php");

}
?>
