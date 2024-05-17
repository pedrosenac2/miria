<?php

if (str_contains($_SERVER['REQUEST_URI'], 'index') || (substr($_SERVER['REQUEST_URI'], -1) == '/')) {
?>
    <!-- Navegação -->
    <header class="header">
        <div class="container d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a class="navbar-brand fs-3 text-dark" href="#" style="margin-bottom: 20px;">
                    <strong> <span style="font-weight: lighter;">Miriã
                        </span><span> Maugé </span></strong>
                </a>
            </div>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid mb-5">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-4 mb-lg-0">
                            <li class="nav-item me-5">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item me-5 ">
                                <a class="nav-link" href="pages/cursos.php">Cursos</a>
                            </li>
                            <li class="nav-item me-5 ">
                                <a class="nav-link" href="pages/e-books.php" role="button" aria-expanded="false">
                                    E-Books
                                </a>
                            </li>
                            <li class="nav-item me-5 ">
                                <a class="nav-link" href="pages/eventos.php" role="button" aria-expanded="false">
                                    Eventos
                                </a>
                            </li>
                            <li class="nav-item" style="justify-content: space-between; height: 100%; display: flex;">
                                <a class="nav-link" href="pages/contato.php" role="button" aria-expanded="false">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Fim Nav -->

<?php
} else {
?>
    <!-- Navegação -->
    <header class="header">
        <div class="container d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a class="navbar-brand fs-3 text-dark"  style="text-align: center;" href="../index.php">
                    <strong> <span style="font-weight: lighter;">Miriã
                        </span><span> Maugé </span></strong>
                </a>
            </div>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid mb-5">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-4 mb-lg-0 ">
                            <li class="nav-item me-5">
                                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item me-5 ">
                                <a class="nav-link" href="../pages/cursos.php">Cursos</a>
                            </li>
                            <li class="nav-item me-5 ">
                                <a class="nav-link" href="../pages/e-books.php" role="button" aria-expanded="false">
                                    E-Books
                                </a>
                            </li>
                            <li class="nav-item me-5 ">
                                <a class="nav-link" href="../pages/eventos.php" role="button" aria-expanded="false">
                                    Eventos
                                </a>
                            </li>
                            <li class="nav-item" style="justify-content: space-between; height: 100%; display: flex;">
                                <a class="nav-link" href="../pages/contato.php" role="button" aria-expanded="false">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Fim Nav -->
<?php
}
?>