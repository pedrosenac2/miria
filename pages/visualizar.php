<?php
// conexao
include("conexao.php");

// comando mysql pra selecionar...
$sql = "SELECT * FROM tb_arquivos WHERE id = 1";

// define resultado a $conn
$resultado = $conn->query($sql);

if ($resultado->rowCount() > 0) {
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        
        // converter a img (base64_encode) do arquivo que é a imagem
        $arquivo_convertido = base64_encode($row["arquivo"]);

        // exibe a imagem
        echo '<img src="data:image/jpeg;base64,' . $arquivo_convertido . '"">';
    }
}

?>