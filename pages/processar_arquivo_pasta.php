<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["arquivo"])) {
    // ativo
    $status = 1;

    // quem vai receber a img
    $diretorio = "img/";

    // passar o diretorio pro arquivo destino, basename traz o tipo(img) e o nome dele
    $arquivo_destino = $diretorio . basename($_FILES["arquivo"]["name"]);

    // if de file_existe:
    if (file_exists($arquivo_destino)) {

        // arquivo ja existe
        echo "Este Arquivo já existe";
        $status = 0;
        exit;
    }

    // arquivo nao existe
    if ($_FILES["arquivo"]["size"] > 500000) {

        // verifica se o arquivo é maior que 5 mega
        echo "Arquivo muito grande, limite até 5 megas";
        $status = 0;
        exit;
    }

    // pathinfo > pacote de info
    $extensao_arquivo = pathinfo($arquivo_destino, PATHINFO_EXTENSION);

    if ($extensao_arquivo != "jpg" && $extensao_arquivo != "png") {
        echo "Formato inválido, somente .jpg ou .png";
        $status = 0;
        exit;
    }

    if ($status == 1) {
        // subiu a img
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo_destino);
        echo "Arquivo enviado com sucesso";
    } else {
        echo "não foi possivel realizar seu upload";
    }

}
?>