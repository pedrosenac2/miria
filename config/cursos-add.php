<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nome'];
    $desc = $_POST['descricao'];
    
    try {
        //code...
        if (empty($nome) || empty($descricao)) {
            throw new Exception('Erro, nome e descrição não podem ser Vazios!!');
        }
        
        include "conexao.php";
        
        // Verifica se o arquivo foi enviado sem erros
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            // Obtém o caminho do arquivo temporário
            $imagem_temp = $_FILES['imagem']['tmp_name'];
            
            // Lê o conteúdo do arquivo
            $imagem_data = file_get_contents($imagem_temp);
            
            // Insert na tb_img para ser recuperada na consulta abaixo
            $sql = "INSERT INTO tb_img (img) VALUES (:img)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':img', $imagem_data, PDO::PARAM_LOB);
            $stmt->execute();

            // Pega o ID da última imagem inserida
            $last_id = $conn->lastInsertId();

            // Prepara a consulta SQL
            $sql = "INSERT INTO tb_curso (nome, descricao, id_img) VALUES (:nome, :descricao, :id_img)";
            $stmt = $conn->prepare($sql);

            // Associa os parâmetros
            $stmt->bindParam(':nome', $name);
            $stmt->bindParam(':descricao', $desc);
            $stmt->bindParam(':id_img', $last_id);

            // Executa a consulta
            $stmt->execute();

            header("Location: ../PainelADM/index.php");

            // Redireciona ou exibe uma mensagem de sucesso, conforme necessário
        } else {
            // Se houver um erro no upload do arquivo, exiba uma mensagem de erro
            echo "Erro ao fazer upload da imagem.";
        }
    } catch (Exception $e) {
        echo "Erro ao Adicionar o Curso".$e->getMessage();
        
    }
} else {
    echo "Acesso Inválido";
}
?>