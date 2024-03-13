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

    <title>Cursos-Miriã Mauge</title>
</head>

<body>

    <?php
    include('../includes/header.php');
    ?>


    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/cursos" style="text-decoration: none;">Cursos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Curso X</li>
            </ol>
        </nav>
        <div class="row mb-5">
            <div class="col-md-6">
                <h1>Curso X</h1>
                <p>Texto explicativo sobre o que a pessoa irá entender com o Curso X.</p>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gh6txL0S5ME?si=lj5g2MN9VitRmspt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        <h2 class="mb-3">Público Alvo</h2>
        <p>Este curso é desenvolvido para você que busca...</p>
        <h2 class="mb-3">FAQ</h2>
        <dl class="row">
            <dt class="col-sm-3">Pergunta 1</dt>
            <dd class="col-sm-9">Resposta 1</dd>

            <dt class="col-sm-3">Pergunta 2</dt>
            <dd class="col-sm-9">Resposta 2</dd>

            <dt class="col-sm-3">Pergunta 3</dt>
            <dd class="col-sm-9">Resposta 3</dd>

            <dt class="col-sm-3">Pergunta 4</dt>
            <dd class="col-sm-9">Resposta 4</dd>
            <!-- etc -->
        </dl>
    </div>


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