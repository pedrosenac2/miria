<?php

include '../config/conexao.php';

$sql = "SELECT tb_galeria.id, tb_img.img 
FROM tb_galeria 
INNER JOIN tb_img 
ON tb_galeria.id_img = tb_img.id";
$stmt = $conn->query($sql);
$imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                    <img src="../assets/img/img_banner/banner2.jpg" alt="">
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
                    <?php
                        foreach ($imagens as $imagem) {
                    ?>
                    <li>
                        <a href="data:image/jpeg;base64,<?= base64_encode($imagem['img']) ?>" alt="Imagem 1" class="carousel-image" data-fancybox="galeria">
                            <img src="data:image/jpeg;base64,<?= base64_encode($imagem['img']) ?>" class="carousel-image" alt="Card Imagem">
                        </a>
                    </li>
                    <?php } ?>		
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