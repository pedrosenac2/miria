<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $id = $_POST["id"];

    include "conexao.php";

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        // Obtém o caminho do arquivo temporário
        $imagem_temp = $_FILES['imagem']['tmp_name'];

        // Lê o conteúdo do arquivo
        $imagem_data = file_get_contents($imagem_temp);

        // Atualiza a tb_ebooks
        $stmt = $conn->prepare("UPDATE tb_ebooks SET nome = :nome, descricao = :descricao, imagem = :imagem WHERE id = :id");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":imagem", $imagem_data);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

    } else {
        // Se houver um erro no upload do arquivo, exiba uma mensagem de erro
        echo "Erro ao fazer upload da imagem.";
    }

    header("location: ../PainelADM/index.php");

} else {

    echo "Acesso invalido";
    header("location: listagem.php");

}
?>