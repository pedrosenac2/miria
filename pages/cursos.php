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
    include('../config/conexao.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $search = $_POST["searchbar"];
        $sql = "SELECT tb_curso.id ,tb_curso.nome, tb_curso.descricao, tb_curso.id_img, tb_img.img 
        FROM tb_curso 
        INNER JOIN tb_img 
        ON tb_curso.id_img = tb_img.id
        WHERE nome LIKE '%$search%' ";
    }else{
        $sql = "SELECT tb_curso.id ,tb_curso.nome, tb_curso.descricao, tb_curso.id_img, tb_img.img 
        FROM tb_curso 
        INNER JOIN tb_img 
        ON tb_curso.id_img = tb_img.id";
    }

    
    $resultado = $conn->query($sql);

    if ($resultado) {
        $cursos = $resultado->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "Erro na consulta: " . $conn->errorInfo();
    }
    ?>

    <?php  
    include('../includes/header.php');
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-16">
                <h1 class="text-center title">Cursos</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 search">
                <form action="cursos.php" method="post" class="d-flex">
                    <input class="form-control me-2 searchbar" id="searchbar" name="searchbar" type="search" placeholder="Pesquise por um curso" aria-label="Pesquisar">
                    <button class="searchbutton" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center subtitle">Todos os Cursos</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <div class="ordenar-por">
                    <label for="">Ordenar por: </label>
                    <select name="ordenar" id="ordenar">
                        <option value="alfabetica">Mais recente</option>
                        <option value="alfabetica">Alfabética</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($cursos as $curso): ?>

                <div class="col-md-4 link-curso">
                    <a href="cursoEspecifico.php?id=<?php echo $curso['id']; ?>">
                        <div class="curso">
                            <div class="img-curso">
                                <?php
                                echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($curso['img']) . '" style="width:100%; height:100%; object-fit:cover; margin-bottom:15px;">';
                                ?>
                            </div>
                            <div class="txt-curso">
                                <h3 class="text-center">
                                    <?php echo $curso['nome']; ?>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if(count($cursos) > 9) { ?>
            <div class="button-container mt-5"><button class="veja-mais">Veja Mais</button></div>
        <?php } ?>
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