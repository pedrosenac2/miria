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

    <!-- Adicionei um contêiner para o efeito de parallax -->
    <div class="parallax-container">
        <div class="text-container">
            <div id="typewrite"></div>
        </div>
    </div>

    <!-- Cards da pagina -->

    <div class="conteudo">
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


    <!-- esse cara é o cassosel -->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <?php
            // Diretório onde as imagens estão armazenadas
            $diretorio = 'config/upload_banner/';

            // Lista de extensões de arquivo permitidas
            $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'PNG', 'JPEG', 'JPG'];

            // Lista os arquivos da pasta
            $arquivos = scandir($diretorio);

            // Contador para os indicadores do carousel
            $contador = 0;

            // Loop pelos arquivos
            foreach ($arquivos as $arquivo) {
                // Verifica se é um arquivo e se sua extensão é permitida
                if (is_file($diretorio . $arquivo) && in_array(pathinfo($arquivo, PATHINFO_EXTENSION), $extensoes_permitidas)) {
                    // Define a classe 'active' para o primeiro item
                    $classe_ativa = ($contador == 0) ? 'active' : '';

                    // Gera o indicador do carousel
                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $contador . '" class="' . $classe_ativa . '" aria-label="Slide ' . ($contador + 1) . '"></button>';

                    $contador++;
                }
            }
            ?>
        </div>
        <div class="carousel-inner">
            <?php
            // Reinicia o contador
            $contador = 0;

            // Loop pelos arquivos novamente
            foreach ($arquivos as $arquivo) {
                // Verifica se é um arquivo e se sua extensão é permitida
                if (is_file($diretorio . $arquivo) && in_array(pathinfo($arquivo, PATHINFO_EXTENSION), $extensoes_permitidas)) {
                    // Define a classe 'active' para o primeiro item
                    $classe_ativa = ($contador == 0) ? 'active' : '';

                    // Gera o item do carousel
                    echo '<div class="carousel-item ' . $classe_ativa . '">';
                    echo '<img src="' . $diretorio . $arquivo . '" class="d-block w-100" alt="Imagem ' . ($contador + 1) . '">';
                    echo '</div>';

                    $contador++;
                }
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- acaba o carrosel aqui -->

    <div class="conteudo">
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

    <!-- Eventos -->

    <div class="event-section">
        <div class="event-details">
            <!-- Os detalhes do evento serão gerados dinamicamente com PHP -->
            <?php
            include 'config/conexao.php';

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Busca os eventos no banco de dados
            $sql = "SELECT titulo, descricao, nome_imagem, data_evento, localizacao FROM tb_eventos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $activeClass = 'active';
                echo '<div id="eventCarousel" class="carousel slide" data-ride="carousel"><div class="carousel-inner">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<img src="' . $row["nome_imagem"] . '" class="d-block w-100" alt="' . $row["titulo"] . '">';
                    echo '</div>';
                    $activeClass = ''; // Remove a classe 'active' após o primeiro item
                }
                echo '</div>';
                echo '<a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">';
                echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                echo '<span class="sr-only">Previous</span></a>';
                echo '<a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">';
                echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                echo '<span class="sr-only">Next</span></a></div>';

                // Exibe os detalhes do evento
                echo '<div class="event-details">';
                $result->data_seek(0); // Reinicia o ponteiro do resultado
                while ($row = $result->fetch_assoc()) {
                    echo '<h2>' . $row["titulo"] . '</h2>';
                    echo '<p>' . $row["descricao"] . '</p>';
                    echo '<p>Data: ' . date("d/m/Y", strtotime($row["data_evento"])) . '</p>';
                    echo '<p>Localização: ' . $row["localizacao"] . '</p>';
                }
                echo '</div>';
            } else {
                echo '<div class="event-details"><p>Nenhum evento encontrado.</p></div>';
            }

            $conn->close();
            ?>

        </div>
    </div>

    <!-- Fim evento-->

    <!-- footer -->
    <?php
    include ('includes/footer.php');
    ?>
    <!-- fim footer -->

    <script>
        window.addEventListener("load", typewrite);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll('.carousel-inner img');
            images.forEach(image => {
                image.addEventListener('click', function () {
                    const imgSrc = this.getAttribute('src');
                    const fullScreenDiv = document.createElement('div');
                    fullScreenDiv.style.position = 'fixed';
                    fullScreenDiv.style.top = '0';
                    fullScreenDiv.style.left = '0';
                    fullScreenDiv.style.width = '100%';
                    fullScreenDiv.style.height = '100%';
                    fullScreenDiv.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                    fullScreenDiv.style.display = 'flex';
                    fullScreenDiv.style.alignItems = 'center';
                    fullScreenDiv.style.justifyContent = 'center';
                    fullScreenDiv.innerHTML = `<img src="${imgSrc}" style="max-width: 90%; max-height: 90%;">`;
                    fullScreenDiv.addEventListener('click', function () {
                        document.body.removeChild(fullScreenDiv);
                    });
                    document.body.appendChild(fullScreenDiv);
                });
            });
        });
    </script>

    <!-- JS -->
    <script type="text/javascript" src="assets/js/scripts.js"></script>

    <!-- Incluindo os arquivos JavaScript do Bootstrap (jQuery necessário) -->
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