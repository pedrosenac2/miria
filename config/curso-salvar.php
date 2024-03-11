<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    // $id_img = $_POST["id_img"];
    $id = $_POST["id"];

    include "conexao.php"; 
    
    
    $stmt = $conn->prepare("UPDATE tb_curso SET nome = :nome, descricao = :descricao WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    // $stmt->bindParam(':imagem', $imagem_data, PDO::PARAM_LOB);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    header("location: ../adm-test/lista-cursos.php");



}else{

echo "Acesso invalido";
header("location: listagem.php");

}

?>