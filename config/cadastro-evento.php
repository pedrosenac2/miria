<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Verifica se o arquivo foi enviado sem erros
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            // Verifica o tipo de arquivo usando exif_imagetype() para uma verificação mais precisa
            $imagem_tipo = exif_imagetype($_FILES['imagem']['tmp_name']);
            if ($imagem_tipo !== IMAGETYPE_JPEG && $imagem_tipo !== IMAGETYPE_PNG) {
                throw new Exception('Apenas arquivos PNG e JPEG são permitidos.');
            }

            // Define o diretório de destino
            $diretorio_destino = 'upload_evento/';

            // Verifica se o diretório de destino existe, se não, tenta criá-lo
            if (!file_exists($diretorio_destino) && !mkdir($diretorio_destino, 0777, true)) {
                throw new Exception('Erro ao criar o diretório de destino para o upload.');
            }

            // Obtém o caminho do arquivo temporário e o nome do arquivo
            $imagem_temp = $_FILES['imagem']['tmp_name'];
            $imagem_nome = uniqid() . '_' . $_FILES['imagem']['name'];

            // Define o caminho de destino para a imagem
            $caminho_destino = $diretorio_destino . $imagem_nome;

            // Move o arquivo para o diretório de destino
            if (!move_uploaded_file($imagem_temp, $caminho_destino)) {
                throw new Exception('Erro ao mover o arquivo para o diretório de destino.');
            }

            // Se chegou até aqui, a imagem foi salva com sucesso, então podemos inserir as informações do evento no banco de dados
            include 'conexao.php';

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if ($conn->connect_error) {
                throw new Exception("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Prepara os dados para inserção no banco de dados
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];

            // Insere os dados do evento no banco de dados
            $sql = "INSERT INTO tb_eventos (titulo, descricao, nome_imagem) VALUES ('$titulo', '$descricao', '$caminho_destino')";

            if ($conn->query($sql) !== TRUE) {
                throw new Exception("Erro ao inserir os dados do evento no banco de dados: " . $conn->error);
            }

            // Fecha a conexão com o banco de dados
            $conn->close();

            // Redireciona para uma página de sucesso após o cadastro bem-sucedido
            echo '<script>window.location.href = "../PainelADM/cadastroEvento.php?success=true";</script>';
            exit();
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