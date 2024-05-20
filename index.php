<?php
include 'config/conexao.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$query = "SELECT titulo, descricao, data_evento, localizacao, imagem FROM tb_eventos";
$result = $conn->query($query);
$eventos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $eventos[] = $row;
    }
}
$conn->close();
?>

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


</head>
<style>
    .conteudo {
        text-align: center;
        line-height: 0.8;
        margin-bottom: 50px;
        margin-top: 100px;
    }

    .conteudo p {
        margin: 0 auto;
        line-height: 2;
        color: var(--grayishBlue);
    }


    .nextEvents h2 {
        font-family: Roboto, sans-serif;
        font-size: 45px;
        letter-spacing: 5px;
        margin-bottom: 40px;
        position: relative;
    }

    .nextEvents h2::after {
        content: "";
        position: absolute;
        left: 9%;
        bottom: 0;
        width: 283px;
        height: 3px;
        background-color: #800000;
    }

    .nextEventsContent {
        display: flex;
        gap: 10px;
    }

    .eventsImg img {
        width: 800px;
    }

    .eventsTxt {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .eventDateTime {
        display: flex;
        justify-content: space-between;
    }

    .eventAddress,
    .eventDate {
        font-family: Roboto, sans-serif;
        font-weight: bold;
        font-size: 25px;
    }

    .eventDescription {
        font-family: Roboto, sans-serif;
        font-size: 20px;
    }

    .finishEvents {
        margin-top: 100px;
    }

    .finishEvents h2 {
        font-family: Roboto, sans-serif;
        font-size: 45px;
        letter-spacing: 5px;
        margin-bottom: 40px;
        position: relative;
    }

    .finishEvents h2::after {
        content: "";
        position: absolute;
        left: 9%;
        bottom: 0;
        width: 283px;
        height: 3px;
        background-color: #800000;
    }

    .imagem-galeria {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .imagem-galeria li {
        flex: auto;
        height: 300px;
    }

    .imagem-galeria li img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        vertical-align: middle;
        border-radius: 5px;
    }
</style>





</head>

<body>

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

    <div class="event-section d-flex justify-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($eventos as $index => $evento): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="nextEventsContent">
                            <div class="eventsImg">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($evento['imagem']); ?>"
                                    class="d-block w-100" alt="">
                            </div>

                            <div class="eventsTxt">
                                <p class="eventAddress"><?php echo htmlspecialchars($evento['localizacao']); ?></p>
                                <p class="eventDescription"><?php echo htmlspecialchars($evento['descricao']); ?></p>
                                <div class="eventDateTime">
                                    <p class="eventDate"><?php echo htmlspecialchars($evento['data_evento']); ?></p>
                                    <p class="eventDate">
                                        <?php echo isset($evento['horario_evento']) ? htmlspecialchars($evento['horario_evento']) : 'Horário não disponível'; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>


    </div>


    <!-- Fim evento-->

    <!-- Cursos em Destaque -->
    <!-- Fim -->

    <!-- Ebooks em Destaque -->
    <!-- Fim -->

    <!-- footer -->
    <?php
    include ('includes/footer.php');
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</body>

</html>