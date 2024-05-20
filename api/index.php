<?php
    header('Content-Type: application/json; charset=utf-8');
    include "../config/conexao.php";

// Verifique se o parâmetro 'file' foi passado via GET
if (isset($_GET['method'])) {
    $method = $_GET["method"];
    // Defina o caminho para o diretório onde os arquivos estão armazenados
    $directory = 'methods/';

    // Crie o caminho completo do arquivo
    $filePath = $directory . $method . ".php";

    // Verifique se o arquivo existe
    if (file_exists($filePath)) {
        // Se o arquivo existir, inclua-o
        include $filePath;
    }
}
?>