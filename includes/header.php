<?php

if(str_contains($_SERVER['REQUEST_URI'], 'index')){
    ?>
    <div class="header">
        
    <div class="logo">
        <span style="color: grey;">Miriã </span>
        <span style="color: maroon;">Mauge</span>
    </div>

    <div class="navigation">
        <a href="index.php">Home</a>
        <a href="#">Contato</a>

        <div class="dropdown">
            <a href="#">Workshop</a>
        </div>

        <a href="pages/cursos.php">Cursos</a>
        <a href="pages/e-books.php">E-books</a>
        <a href="#">Dúvidas</a>
    </div>
</div>
<?php
}
else{ ?>
<div class="header">
        
        <div class="logo">
            <span style="color: grey;">Miriã </span>
            <span style="color: maroon;">Mauge</span>
        </div>
    
        <div class="navigation">
            <a href="../index.php">Home</a>
            <a href="#">Contato</a>
    
            <div class="dropdown">
                <a href="#">Workshop</a>
            </div>
    
            <a href="../pages/cursos.php">Cursos</a>
            <a href="../pages/e-books.php">E-books</a>
            <a href="#">Dúvidas</a>
        </div>
    </div>
<?php
}
?>
