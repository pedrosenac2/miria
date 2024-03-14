<?php
include("conexao.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $search = $_POST["searchbar"];
    $sql = "SELECT * FROM tb_curso WHERE nome LIKE '%$search%'";
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    if($stmt){
        $ebooks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    if(){
        
    }
}
?>

