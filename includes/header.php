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
            <a class="hoverLink" href="index.php">Home</a>
        </li>
         <li class="nav-grid">
            <a class="hoverLink" href="pages/cursos.php">Cursos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="pages/e-books.php">E-books</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="pages/eventos.php">Eventos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="pages/contato.php">Contato</a>
        </li>

      </ul>
</nav>




<?php
} else {
    ?>
     <nav class="navbar navbar-expand-lg">
        <div class="container d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a class="navbar-brand fs-3" href="#">
                    <strong style="font-size: 40px;"> <span style="color: dark; font-weight: lighter;">Miriã
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
            <a class="hoverLink" href="../index.php">Home</a>
        </li>
         <li class="nav-grid">
            <a class="hoverLink" href="../pages/cursos.php">Cursos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="../pages/e-books.php">E-books</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="../pages/eventos.php">Eventos</a>
        </li>
        <li class="nav-grid">
            <a class="hoverLink" href="../pages/contato.php">Contato</a>
        </li>

      </ul>
</nav>
<?php
}
?>