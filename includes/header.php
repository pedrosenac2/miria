<?php
if (str_contains($_SERVER['REQUEST_URI'], 'index') || (substr($_SERVER['REQUEST_URI'], -1) == '/')) {
    ?>

    


    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a class="navbar-brand fs-3" href="#">
                    <strong style="font-size: 40px;"> <span style="color: maroon; font-weight: lighter;">Miriã
                        </span><span style="color: maroon;"> Maugé </span></strong>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav me-auto mb-4 mb-lg-0 ">
        <li class="nav-grid">
            <a class="hoverLink" href="#">Home</a>
        </li>
         <li class="nav-grid">
            <a class="hoverLink" href="#">Cursos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="#">E-books</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="#">Eventos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="#">Contato</a>
        </li>

      </ul>
</nav>

</body>
</html>


<?php
} else {
    ?>
     <nav class="navbar navbar-expand-lg">
        <div class="container d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
<<<<<<< Updated upstream
                <a class="navbar-brand fs-3" href="../index.php">
                    <strong style="font-size: 40px;"> <span style="color: maroon; font-weight: lighter;">Miriã
=======
                <a class="navbar-brand fs-3" href="#">
                    <strong style="font-size: 40px;"> <span style="color: dark; font-weight: lighter;">Miriã
>>>>>>> Stashed changes
                        </span><span style="color: maroon;"> Maugé </span></strong>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav me-auto mb-4 mb-lg-0 ">
        <li class="nav-grid">
            <a class="hoverLink" href="#">Home</a>
        </li>
         <li class="nav-grid">
            <a class="hoverLink" href="#">Cursos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="#">E-books</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="#">Eventos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="#">Contato</a>
        </li>

      </ul>
</nav>
<?php
}
?>