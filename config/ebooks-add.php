<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nome'];
    $desc = $_POST['descricao'];

    // Verifica se o arquivo foi enviado sem erros
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        // Obtém o caminho do arquivo temporário
        $imagem_temp = $_FILES['imagem']['tmp_name'];

        // Lê o conteúdo do arquivo
        $imagem_data = file_get_contents($imagem_temp);

        // Prepara a consulta SQL
        $sql = "INSERT INTO tb_ebooks (nome, descricao, imagem) VALUES (:nome, :descricao, :imagem)";
        $stmt = $conn->prepare($sql);

        // Associa os parâmetros
        $stmt->bindParam(':nome', $name);
        $stmt->bindParam(':descricao', $desc);
        $stmt->bindParam(':imagem', $imagem_data, PDO::PARAM_LOB);

        // Executa a consulta
        $stmt->execute();

        header("Location: ../PainelADM/index.php");

        // Redireciona ou exibe uma mensagem de sucesso, conforme necessário
    } else {
        // Se houver um erro no upload do arquivo, exiba uma mensagem de erro
        echo "Erro ao fazer upload da imagem.";
    }
} else {
    echo "Acesso Inválido";
}
?>

<?php
// include "conexao.php";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['nome'];
//     $desc = $_POST['descricao'];

//     $sql = "INSERT INTO tb_ebooks (nome, descricao) VALUES (:nome, :descricao)";
//     $stmt = $conn->prepare($sql); 

//     $stmt->bindParam(':nome', $name);
//     $stmt->bindParam(':descricao', $desc);

//     $stmt->execute();

//     header("Location: ../adm-test/admin-test.html");
// }else{
//     echo "Acesso Inválido";
// }

?>