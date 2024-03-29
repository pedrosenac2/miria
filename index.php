<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />


    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Site MiriaMauge</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;700&display=swap');
    </style>


</head>

<body class="p-0 m-0 border-0 bd-example m-0 border-0">

    <?php
    include_once 'includes/header.php';
    ?>

    <!-- esse cara é o cassosel -->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/img_banner/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img_banner/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img_banner/banner3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- acaba o carrosel aqui -->



    <!-- Cards da pagina -->

    <div class="header">
        <h1>Conduzindo você em:</h1>
        <h1>Autoconhecimento, propósito e sucesso profissional.</h1>

        <p style="font-size: 30px;">Descubra quem você é, seu propósito e transforme sua carreira.</p>
    </div>
    <div class="row1-container">
        <div class="box box-down cyan">
            <h2 class="text-center">Encontre-se</h2>
            <p>Aprenda a se conhecer melhor, a descobrir o seu propósito de vida e a transformar a sua carreira com os
                nossos métodos exclusivos.</p>
            <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
        </div>

        <div class="box red">
            <h2 class="text-center">Transforme-se</h2>
            <p>Você sabe quem você é, o que você quer e como você pode chegar lá ? Nós te ajudamos a responder essas
                perguntas e a mudar a sua carreira para melhor.</p>
            <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>

        <div class="box box-down blue">
            <h2 class="text-center">Mude</h2>
            <p>Conecte-se com o seu propósito e mude a sua carreira com a nossa orientação profissional.</p>
            <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
    </div>
    <div class="row2-container mt-5 mb-4">
        <div class="box orange">
            <h2 class="text-center">Revele</h2>
            <p>Revele a sua verdadeira identidade, alinhe o seu propósito com a sua carreira e cresça profissionalmente
                com o nosso acompanhamento personalizado.</p>
            <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
    </div>

    <!-- Fim Cards -->

    <!-- Sobre -->
    <div class="container mt-5">

        <span class="mb-4 text-decoration-none" style="color: rgb(2, 108, 207); display: inline-block; width: auto; font-size: 18px;">
            / Sobre Min
        </span>

        <div class="row align-items-start">
            <!-- Div da esquerda com o caminho, título e texto -->
            <div class="col-sm-6">
                <div class="title">
                    <h2>Miriã Maugé</h2>
                </div>
                <div class="text">
                    <p>
                        Minha Missão é inspirar e implementar soluções
                        para o
                        desafio ambiental. Estamos comprometidos em aumentar a conscientização e o entendimento sobre
                        questões ambientais e a necessidade urgente de ação. Além disso, buscamos desenvolver e promover
                        novas tecnologias que minimizem nosso impacto no meio ambiente.
                    </p>
                </div>
            </div>
            <!-- fim -->

            <!-- Div da direita com a imagem -->
            <div class="col-sm-6">
                <img src="assets/img/miria.png" alt="Descrição da imagem" style="width: 70%;">
            </div>
        </div>
    </div>

    <!-- Fim Sobre-->

    <!-- footer -->
    <?php
    include('includes/footer.php');
    ?>
    <!-- fim footer -->


    <!-- 
    <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
        <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a>
    </div> -->

    <!-- JS -->
    <script type="text/javascript" src="assets/js/scripts.js"></script>

    <!-- Incluindo os arquivos JavaScript do Bootstrap (jQuery necessário) -->
    <script src="https://kit.fontawesome.com/2eeb56781b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>