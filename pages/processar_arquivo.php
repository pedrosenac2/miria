<?php

include("conexao.php");

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['arquivo'])){
$arquivo_binario = file_get_contents($_FILES['arquivo']['tmp_name']);

$sql = "INSERT INTO tb_arquivos (arquivo) VALUES(:arquivo_binario)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":arquivo_binario",$arquivo_binario);

$stmt->execute();

header("Location: index.php");
}

?>