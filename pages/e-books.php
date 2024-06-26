<?php
    $ebooks = [];

    include "../config/search.php"
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ebooks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <title>E-books-Miriã Mauge</title>
</head>

<body>
    <?php
        include('../includes/header.php');
    ?>
    
    <div class="container container-ebook">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center title">E-Books</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 search">
                <form action="e-books.php" method="post" class="d-flex">
                    <input class="form-control me-2 searchbar" id="searchbar" name="searchbar" type="search" placeholder="Pesquise por um e-book" aria-label="Pesquisar">
                    <button class="searchbutton" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center subtitle">Todos os e-books</h2>
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

            <div class="row list-curso">
                <?php foreach($ebooks as $ebook){ ?> 
                
                <div class="col-md-4 link-curso">    
                    <a href="ebookEspecifico.php?id=<?php echo $ebook['id']; ?>">
                        <div class="curso">
                            <div class="img-curso">
                                <?php
                                    echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($ebook['imagem']) . '" style="width:100%; height:100%; object-fit:cover; margin-bottom:15px;">';
                                ?>
                            </div>
                            <div class="txt-curso">
                                <h3><?php echo $ebook["nome"] ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>

        <?php if(count($ebooks) > 9) { ?>
            <div class="button-container mt-5"><button class="veja-mais">Veja Mais</button></div>
        <?php } ?>
    </div>

    <?php
    include('../includes/footer.php');
    ?>
    
    
    <script src="../assets/js/vermais.js"></script>
    <script src="https://kit.fontawesome.com/2eeb56781b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="../assets/js/search-ebooks.js"></script>
    <script src="../assets/js/page-load.js"></script>
</body>

</html>
<!-- fim cabeçalho -->