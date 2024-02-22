
<?php

if(str_contains($_SERVER['REQUEST_URI'], 'index')){
?>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mb-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0 " style="font-size: 26px;">
                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                        <a class="nav-link" href="#" role="button" aria-expanded="false">
                            Eventos
                        </a>
                    </li>
                    <li class="nav-item" style="justify-content: space-between; height: 100%; display: flex;">
                        <a class="nav-link" href="#" role="button" aria-expanded="false">
                            Contato
                        </a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Fim Nav -->
<?php
}
else{ 
?>
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mb-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0 " style="font-size: 26px;">
                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
                        <a class="nav-link" href="#" role="button" aria-expanded="false">
                            Eventos
                        </a>
                    </li>
                    <li class="nav-item" style="justify-content: space-between; height: 100%; display: flex;">
                        <a class="nav-link" href="#" role="button" aria-expanded="false">
                            Contato
                        </a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Fim Nav -->
<?php
}
?>
