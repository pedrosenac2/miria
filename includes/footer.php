<?php
if (str_contains($_SERVER['REQUEST_URI'], 'index') || (substr($_SERVER['REQUEST_URI'], -1) == '/')) {
    ?>

<!-- Footer Começo -->
<footer class="text-white text-center text-lg-start bg-dark mt-5" >
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
            <!--Grid column para links de navegação -->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Navegação</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <a href="index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="pages/cursos.php" class="text-white text-decoration-none">Cursos</a>
                    </li>
                    <li class="mb-2">
                        <a href="pages/e-books.php" class="text-white text-decoration-none">E-Books</a>
                    </li>
                    <li class="mb-2">
                        <a href="pages/eventos.php" class="text-white text-decoration-none">Eventos</a>
                    </li>
                    <li>
                        <a href="pages/contato.php" class="text-white text-decoration-none">Contato</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column para informações de contato -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Contato</h5>
                <p><i class="fas fa-home me-3"></i> São João da Boa Vista, São Paulo</p>
                <p><i class="fas fa-envelope me-3"></i> info@example.com</p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fa-solid fa-mobile-retro me-3"></i> + 01 234 567 89</p>
            </div>
            <!--Grid column-->

            <!--Grid column para redes sociais -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Redes Sociais</h5>
                <div class="mt-4">
                    <!-- Instagram -->
                    <a type="button" class="btn btn-floating btn-primary btn-lg me-2"><i
                            class="fa-brands fa-instagram fa-2x"></i></a>
                    <!-- Linkedin -->
                    <a type="button" class="btn btn-floating btn-primary btn-lg me-2"><i
                            class="fa-brands fa-linkedin fa-2x"></i></a>
                    <!-- Adicione outras redes sociais aqui, se necessário -->
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 18px;">
        © 2024 Copyright:
        <a class="text-white" href="site" style="text-decoration: none;">miriamauge.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Fim footer -->

<?php
} else {
    ?>


<!-- Footer Começo -->
<footer class="text-white text-center text-lg-start bg-dark mt-5">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
            <!--Grid column para links de navegação -->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Navegação</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <a href="../index.php" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="../pages/cursos.php" class="text-white text-decoration-none">Cursos</a>
                    </li>
                    <li class="mb-2">
                        <a href="../pages/e-books.php" class="text-white text-decoration-none">E-Books</a>
                    </li>
                    <li class="mb-2">
                        <a href="../pages/eventos.php" class="text-white text-decoration-none">Eventos</a>
                    </li>
                    <li>
                        <a href="../pages/contato.php" class="text-white text-decoration-none">Contato</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column para informações de contato -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Contato</h5>
                <p><i class="fas fa-home me-3"></i> São João da Boa Vista, São Paulo</p>
                <p><i class="fas fa-envelope me-3"></i> info@example.com</p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fa-solid fa-mobile-retro me-3"></i> + 01 234 567 89</p>
            </div>
            <!--Grid column-->

            <!--Grid column para redes sociais -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Redes Sociais</h5>
                <div class="mt-4">
                    <!-- Instagram -->
                    <a type="button" class="btn btn-floating btn-primary btn-lg me-2"><i
                            class="fa-brands fa-instagram fa-2x"></i></a>
                    <!-- Linkedin -->
                    <a type="button" class="btn btn-floating btn-primary btn-lg me-2"><i
                            class="fa-brands fa-linkedin fa-2x"></i></a>
                    <!-- Adicione outras redes sociais aqui, se necessário -->
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 18px;">
        © 2024 Copyright:
        <a class="text-white" href="site" style="text-decoration: none;">miriamauge.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Fim footer -->

<?php 
}
?>
