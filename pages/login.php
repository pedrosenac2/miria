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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="../config/valida-login.php" method="post">

            <?php
                    if($erro != ''){
                ?>
                                            
                <div class="alert alert-warning" role="alert">                              
                    <?php echo $erro;?>
                </div>

                <?php 
                    }
              ?>

              <div class="divider d-flex align-items-center my-4">
                <h1 class="text-center fw-bold mx-3 mb-0">Login</h1>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="loginEmail">
                        E-mail
                </label>
                <input type="email" name="loginEmail" id="loginEmail" class="form-control form-control-lg" placeholder="Insira um endereço de email" required/>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <label class="form-label" for="loginSenha">Senha</label>
                <input type="password" name="loginSenha" id="loginSenha" class="form-control form-control-lg" placeholder="Sua senha" required/>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3"/>
                  <label class="form-check-label" for="form2Example3">
                    Lembrar senha
                  </label>
                </div>
                <a href="#!" class="text-body">Esqueceu sua senha?</a>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">
                  Login
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://kit.fontawesome.com/2eeb56781b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
