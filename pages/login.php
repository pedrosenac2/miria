<?php
session_start();
$erro = '';
$email = '';

// verifica se existe a variavel de sessao erro
if(isset($_SESSION['erro'])){
    // se existir, atribui o valor em uma variavel local chamada $erro
    $erro = $_SESSION['erro'];
}

// verifica se existe a variavel de sessao email
if(isset($_SESSION['email'])){
    // se existir, caso o usuario ja tenha tentado fazer o login, captura e armazena em uma variavel local $email para trazer o campo do form preenchido
    $email = $_SESSION['email'];
}

// destroi a sessao
session_destroy();
// zera as variaveis de sessao
session_unset();
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<title>Login-Miriã Mauge</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <span style="color: grey;">Miriã </span>
            <span style="color: maroon;">Mauge</span>
        </div>
        <div class="navigation">
            <a href="#">Home</a>
            <a href="#">Workshop</a>
            <a href="#">Cursos</a>
            <a href="#">E-books</a>
            <a href="#">Contato</a>
            <a href="#">Login</a>
        </div>
    </div>
    <!-- <div class="banner"></div> -->
    <!-- Começo do Conteúdo da Pagina -->
        <div id="container-login">
            <div id="container-grid">
                <form action="../config/valida-login.php" method="post" id="loginForm">
                <?php
                    if($erro != ''){
                ?>
                                            
                <div class="alert alert-warning" role="alert">                              
                    <?php echo $erro;?>
                </div>

                <?php 
                    }
                ?>
                    <center><h2>Login</h2></center>
                    <label for="loginEmail">Email:</label>
                    <input type="email" id="loginEmail" name="loginEmail" required>

                        <label for="loginSenha">Senha:</label>
                        <input type="password" id="loginSenha" name="loginSenha" required>
                        
                        <div id="grid-botao">
                                <div class="botao-">
                                <a class="link" href="esqueceusenha.html">Esqueceu sua senha?</a>
                            </div>
                            <div class="botao">
                                <button type="submit">Entrar</button>
                            </div>
                         </div>
                         <a class="link" href="cadastro.html">Não tem cadastro?</a>
                </form>
                
            </div>
        </div>
    <!-- Fim do Conteúdo da Pagina -->

    <footer>
        <div class="footer-container">
            <div class="footer-column1">
                <div class="navigation">
                    <a href="index.html">Home</a>
                    <a href="#">Contato</a>
                    <a href="#">Workshop</a>
                    <a href="#">Cursos</a>
                    <a href="#">E-books</a>
                </div>
            </div>
            <div class="footer-column2">
                <h3>Entre em Contato</h3>
                <p>Telefone: <a href="tel:1234-5678">3333-0000</a></p>
                <p>Email: <a href="mailto:exemplo@exemplo.com">exemplo@exemplo.com</a></p>
            </div>
            <div class="footer-column3">
                <h3>Redes Sociais</h3>

                <div>
                    <a class="instagram" href="#"><img width="60" height="60" src="https://img.icons8.com/cute-clipart/64/instagram-new.png" alt="instagram-new"/></a>
                    <a class="linkedin" href="#"><img width="58" height="58" src="https://img.icons8.com/fluency/48/linkedin.png" alt="linkedin"/></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>&copy; 2024 Site Miriã Mauge. Todos os direitos reservados.</p>
        </div>
    </footer>
    <!-- fim footer -->

    <!-- scripts -->

    <script src="assets/js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/2eeb56781b.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- fim -->
</body>
</html>