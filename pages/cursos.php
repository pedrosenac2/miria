<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ebooks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>Cursos-Miriã Mauge</title>
</head>

<body>
    <?php
    // include '../includes/botaoFlutuante.php';
    include('../includes/header.php');
    include('../config/conexao.php');

    $courses = [];

    $sql = "SELECT tb_curso.id ,tb_curso.nome, tb_curso.descricao, tb_curso.id_img, tb_img.img 
    FROM tb_curso 
    INNER JOIN tb_img 
    ON tb_curso.id_img = tb_img.id";
    $resultado = $conn->query($sql);

    if ($resultado) {
        $cursos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "Erro na consulta: " . $conn->errorInfo();
    }
    ?>

    <div class="banner-title">
        <div class="title-container">
            <h1 class="title">Cursos</h1>
        </div>

        <div class="search">
            <form action="" method="post">
                <input type="text" name="searchbar" id="searchbar" placeholder="Pesquise por um e-book">
                <button class="searchbutton" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="title-container">
            <h2 class="subtitle">Os melhores Cursos para você.</h2>
        </div>

        <div class="container-curso">
            <?php foreach ($cursos as $curso): ?>
                <a class="link-curso" href="cursoEspecifico.php">
                    <div class="curso">
                        <div class="img-curso">
                            <?php
                            echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($curso['img']) . '" style="width:100%; max-height:300px; object-fit:cover; margin-bottom:15px;">';
                            ?>
                        </div>
                        <div class="txt-curso">
                            <h3 class="nome-curso">
                                <?php echo $curso['nome']; ?>
                            </h3>
                            <p>
                                <?php echo $curso['descricao']; ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="button-container"><button class="veja-mais">Veja Mais</button></div>
    </div>

    <?php
    include('../includes/footer.php');
    ?>

    <script src="../assets/js/vermais.js"></script>
    <script src="https://kit.fontawesome.com/2eeb56781b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>