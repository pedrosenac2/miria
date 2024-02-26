<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Contato</title>

</head>

<style>

</style>

<body>

    <?php
    include '../includes/botaoFlutuante.php'
    ?>

    <?php
    include('../includes/header.php');
    ?>

    <div class="container-contato form-container">
        <form action="../config/contato.php" method="post" class="mx-auto">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" name="departamento">
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone">
            </div>
            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" name="empresa">
            </div>
            <div class="form-group">
                <label for="colaboradores">Número Aproximado de Colaboradores:</label>
                <input type="number" name="colaboradores">
            </div>
            <div class="form-group">
                <label for="area_atuacao">Área de Atuação:</label>
                <input type="text" name="area_atuacao">
            </div>
            <div class="form-group">
                <label for="mensagem">Deixe uma mensagem:</label>
                <textarea name="mensagem"></textarea>
            </div>

            <!-- Repita para os outros campos -->

            <div class="form-group form-check">
                <input type="checkbox" id="aceita_termos" class="form-check-input" required>
                <label for="aceita_termos" class="form-check-label">Ao clicar em Enviar você está aceitando os termos da
                    nossa política de privacidade</label>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php
    include('../includes/footer.php');
    ?>

    <script src="../assets/js/vermais.js"></script>
    <script src="https://kit.fontawesome.com/2eeb56781b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>
<!-- fim cabeçalho -->