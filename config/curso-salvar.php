<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $id = $_POST["id"];
    $id_img = $_POST["id_img"];

    try {
        //code...
        if (empty($nome) || (empty($descricao) || (empty($id_img)))) {
            throw new Exception("Erro, todos os campos são obrigatórios");
        }

        include "conexao.php";

        // Atualiza o nome e a descrição na tabela tb_curso
        $stmt = $conn->prepare("UPDATE tb_curso SET nome = :nome, descricao = :descricao WHERE id = :id");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        // Verifica se o arquivo foi enviado sem erros
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