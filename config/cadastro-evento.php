<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Verifica se o arquivo foi enviado sem erros
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            // Abre o arquivo em modo de leitura binária
            $imagem_temp = fopen($_FILES['imagem']['tmp_name'], 'rb');

            // Converte o conteúdo do arquivo em uma string binária
            $imagem_binaria = fread($imagem_temp, filesize($_FILES['imagem']['tmp_name']));

            // Fecha o arquivo temporário
            fclose($imagem_temp);

            // Se chegou até aqui, a imagem foi carregada com sucesso, então podemos inserir as informações do evento no banco de dados
            include 'conexao.php';

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if ($conn->connect_error) {
                throw new Exception("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Prepara os dados para inserção no banco de dados
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $data_evento = $_POST['data_evento'];
            $horario_evento = $_POST['horario_evento'];
            $localizacao = $_POST['localizacao'];

            // Insere os dados do evento no banco de dados
            $stmt = $conn->prepare("INSERT INTO tb_eventos (titulo, descricao, data_evento, horario_evento, localizacao, imagem) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $titulo, $descricao, $data_evento, $horario_evento, $localizacao, $imagem_binaria);

            if ($stmt->execute()) {
                // Redireciona para uma página de sucesso após o cadastro bem-sucedido
                header("Location: ../PainelADM/cadastroEvento.php?success=true");
                exit();
            } else {
                throw new Exception("Erro ao inserir os dados do evento no banco de dados: " . $conn->error);
            }

            // Fecha a conexão com o banco de dados
            $stmt->close();
            $conn->close();
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