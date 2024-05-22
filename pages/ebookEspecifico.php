<?php
include('../config/conexao.php');

$ebooks = [];

if (isset($_GET['id'])) {
    $ebook_id = $_GET['id'];
    $sql_ebooks = "SELECT * FROM tb_ebooks WHERE id = :id";
    $stmt_ebooks = $conn->prepare($sql_ebooks);
    $stmt_ebooks->execute([':id' => $ebook_id]);
    $ebookEspecifico = $stmt_ebooks->fetch(PDO::FETCH_ASSOC);

    $sql_recomendados = "SELECT * FROM tb_ebooks WHERE id != :id LIMIT 2";
    $stmt_recomendados = $conn->prepare($sql_recomendados);
    $stmt_recomendados->execute([':id' => $ebook_id]);
    $ebooks = $stmt_recomendados->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "ID do ebook não encontrado.";
    exit;
}
?>

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
                <li class="breadcrumb-item"><a href="e-books.php" style="text-decoration: none;">E-Books</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $ebookEspecifico['nome'] ?>
                </li>
            </ol>
        </nav>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <?php
                    echo '<img class="card-img" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($ebookEspecifico['imagem']) . '" style="width:100%; max-height:400px; object-fit:cover; margin-bottom:15px;">'
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">
                    <?= $ebookEspecifico['nome'] ?>
                </h1>
                <h3 class="text-start mb-3 mt-5 color-blue">Sinopse</h3>
                <p>
                    <?= $ebookEspecifico['descricao'] ?>
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mb-5">Você também pode gostar desses livros</h2>
        <div class="row list-curso">
        <?php foreach($ebooks as $ebook){ ?> 
                
                <div class="col-md-6 link-curso">    
                    <a href="ebookEspecifico.php?id=<?php echo $ebook['id']; ?>">
                        <div class="curso">
                            <div class="img-curso">
                                <?php
                                    echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($ebook['imagem']) . '" style="width:100%; height:100%; object-fit:cover; margin-bottom:15px;">';
                                ?>
                            </div>
                            <div class="txt-curso">
                                <div>
                                    <h3><?php echo $ebook["nome"] ?></h3>
                                </div>
                                <div>
                                    <p><?php echo $ebook["descricao"] ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</body>

</html>
<!-- fim cabeçalho -->