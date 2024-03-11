<?php
session_start();
if(isset($_SESSION['id_sistema'])){
    if($_SESSION['id_sistema'] != 'sislogin2024*'){
        header('Location: ../pages/login.php');
    }
}else{
    header('Location: ../pages/login.php');
}
?>