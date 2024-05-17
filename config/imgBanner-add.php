<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Verifica se o arquivo foi enviado sem erros
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            // Verifica o tipo de arquivo
            $imagem_tipo = $_FILES['imagem']['type'];
            if ($imagem_tipo !== 'image/jpeg' && $imagem_tipo !== 'image/png') {
                throw new Exception('Apenas arquivos PNG e JPEG são permitidos.');
            }

            // Obtém o caminho do arquivo temporário
            $imagem_temp = $_FILES['imagem']['tmp_name'];

            // Gera um nome único para o arquivo
            $imagem_nome = uniqid() . '_' . $_FILES['imagem']['name'];

            // Define o caminho de destino para a imagem
            $caminho_destino = 'upload_banner/' . $imagem_nome;

            // Move o arquivo para o diretório de destino
            if (move_uploaded_file($imagem_temp, $caminho_destino)) {
                // Sucesso ao mover o arquivo
                echo '<script>window.location.href = "../PainelADM/cadastroImgBanner.php?success=true";</script>';
                exit();
            } else {
                // Se houver um erro ao mover o arquivo, exibe uma mensagem de erro
                throw new Exception('Erro ao mover o arquivo para o diretório de destino.');
            }
        } else {
            // Se não foi enviado um arquivo ou ocorreu um erro, exibe uma mensagem de erro
            throw new Exception('Erro ao fazer upload da imagem.');
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Acesso Inválido";
}
?>