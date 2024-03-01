<link rel="stylesheet" href="../assets/css/style.css">

<!-- Botão Flutuante -->
<?php

if (str_contains($_SERVER['REQUEST_URI'], 'index') || (substr($_SERVER['REQUEST_URI'], -1) == '/')) {
    ?>
    <div class="fab">
        <button class="main">
        </button>
        <ul>
            <li>
                <label for="curso">Cursos</label>
                <a href="pages/cursos.php">
                    <button id="curso">
                        <i class="fa-solid fa-desktop"></i>
                    </button>
                </a>
            </li>
            <li>
                <label for="ebook">E-books</label>
                <a href="pages/e-books.php">
                    <button id="ebook">
                        <i class="fa-solid fa-book"></i>
                    </button>
                </a>
            </li>
            <li>
                <label for="evento">Eventos</label>
                <a href="pages/eventos.php">
                    <button id="evento">
                        <i class="fa-solid fa-calendar-days"></i>
                    </button>
                </a>
            </li>
            <li>
                <label for="contato">Contato</label>
                <a href="pages/contato.php">
                    <button id="contato">
                        <i class="fa-solid fa-address-book"></i>
                    </button>
                </a>
            </li>
        </ul>
    </div>

    <?php
} else {
    ?>

    <div class="fab">
        <button class="main">
        </button>
        <ul>
            <li>
                <label for="curso">Cursos</label>
                <a href="../pages/cursos.php">
                    <button id="curso">
                        <i class="fa-solid fa-desktop"></i>
                    </button>
                </a>
            </li>
            <li>
                <label for="ebook">E-books</label>
                <a href="../pages/e-books.php">
                    <button id="ebook">
                        <i class="fa-solid fa-book"></i>
                    </button>
                </a>
            </li>
            <li>
                <label for="evento">Eventos</label>
                <a href="../pages/eventos.php">
                    <button id="evento">
                        <i class="fa-solid fa-calendar-days"></i>
                    </button>
                </a>
            </li>
            <li>
                <label for="contato">Contato</label>
                <a href="../pages/contato.php">
                    <button id="contato">
                        <i class="fa-solid fa-address-book"></i>
                    </button>
                </a>
            </li>
        </ul>
    </div>
    <?php
}
?>

<!-- Fim Botão -->

<script src="../assets/js/scripts.js"></script>