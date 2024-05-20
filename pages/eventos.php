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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="../assets/css/events.css" />


    <title>Eventos Miriã Mauge</title>
</head>

<body>
    
    <?php
    include('../includes/header.php');
    ?>

    <div class="container">
        <div class="nextEvents">
            <h2>Próximos Eventos</h2>
            <div class="nextEventsContent">
                <div class="eventsImg">
                    <img src="http://localhost/miria1/assets/img/img_banner/banner2.jpg" alt="">
                </div>

                <div class="eventsTxt">
                    <p class="eventAddress">R. São João, 204 - Centro, São João da Boa Vista - SP, 13870-222</p>
                    <p class="eventDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, repudiandae qui! Ullam repudiandae possimus eius et numquam unde corrupti fugit eum magnam. Maxime dolores harum sed nesciunt aliquam fugiat praesentium!</p>
                    <div class="eventDateTime">
                        <p class="eventDate">22 de maio de 2024</p> 
                        <p class="eventDate">18:00h</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="finishEvents">
            <h2>Eventos Realizados</h2>
            <div class="galeria">
                <ul class="imagem-galeria">
                    <li>
                        <a href="http://localhost/miria1/assets/img/img_banner/banner2.jpg" alt="Imagem 1" class="carousel-image" data-fancybox="galeria">
                            <img src="http://localhost/miria1/assets/img/img_banner/banner2.jpg" alt="Imagem 1" class="carousel-image" alt="Imagem galeria 1">
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/miria1/assets/img/img_banner/banner1.jpg" alt="Imagem 2" data-fancybox="galeria">
                            <img src="http://localhost/miria1/assets/img/img_banner/banner1.jpg" alt="Imagem 2" alt="Imagem galeria 2">
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/miria1/assets/img/img_banner/banner3.jpg" data-fancybox="galeria">
                            <img src="http://localhost/miria1/assets/img/img_banner/banner3.jpg" alt="Imagem galeria 3">
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/miria1/assets/img/img_banner/banner4.jpg" data-fancybox="galeria">
                            <img src="http://localhost/miria1/assets/img/img_banner/banner4.jpg" alt="Imagem galeria 4">
                        </a>
                    </li>
                </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>Fancybox.bind("[data-fancybox]", {
        // Your custom options
      });</script>
</body>

</html>
<!-- fim cabeçalho -->