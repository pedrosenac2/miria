<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de IMG - 12/03 - Servidor</title>
</head>

<body>

    <h5>Upload de Arquivos - Banco de Dados</h5>

    <form action="processar_arquivo_pasta.php" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo" id="arquivo">
        <button type="submit">Upload</button>
    </form>

</body>

</html>