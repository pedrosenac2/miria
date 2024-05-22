<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nome'];
    $desc = $_POST['descricao'];

    try {
        //code...
        if (empty($name) || empty($desc)) {
            throw new Exception('Erro, nome ou descrição podem estar vazios!!');
        }

        // Verifica se o arquivo foi enviado sem erros
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            // Obtém o caminho do arquivo temporário
            $imagem_temp = $_FILES['imagem']['tmp_name'];

            // Lê o conteúdo do arquivo
            $imagem_data = file_get_contents($imagem_temp);
        }else{
            throw new Exception('Erro no upload da imagem.');
        }

        if (isset($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
            // Obtém o caminho do arquivo temporário do ebook
            $pdf_temp = $_FILES['pdfFile']['tmp_name'];

            // Lê o conteúdo do arquivo do ebook
            $pdf_data = file_get_contents($pdf_temp);
        } else {
            // Se houver um erro no upload do ebook, exiba uma mensagem de erro
            throw new Exception('Erro no upload do ebook.');
        }

            // Prepara a consulta SQL
            $sql = "INSERT INTO tb_ebooks (nome, descricao, imagem, pdf) VALUES (:nome, :descricao, :imagem, :pdf)";
            $stmt = $conn->prepare($sql);

            // Associa os parâmetros
            $stmt->bindParam(':nome', $name);
            $stmt->bindParam(':descricao', $desc);
            $stmt->bindParam(':imagem', $imagem_data, PDO::PARAM_LOB);
            $stmt->bindParam(':pdf', $pdf_data, PDO::PARAM_LOB);

            // Executa a consulta
            $stmt->execute();

            header("Location: ../PainelADM/index.php");

    } catch (Exception $e) {
        echo "Erro ao Adicionar o Ebook" . $e->getMessage();
    }
} else {
    echo "Acesso Inválido";
}
?>