<?php
$servername = "10.97.45.110";
$username = "curso";
$password = "1234";
$dbname = "db_miria";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Conexão falhou" . $conn->connect_error);
}

?>