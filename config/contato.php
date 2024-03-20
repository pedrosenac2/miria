<?php

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';


if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
    $assunto = $_POST['assunto'];
}

if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
}

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'contato.testmiria@gmail.com';
$mail->Password = 'senac2024*';
$mail->setFrom('contato.testmiria@gmail.com', 'Contato');
$mail->addAddress('contato.testmiria@gmail.com', 'Receiver Name');

$mail->isHTML(true);
$mail->Subject = $assunto;

$mail->Body = n12br ($mensagem);
$mail->AltBody = n12br(strip_tags($mensagem));

    if (!$mail->send()) {
        echo "Erro não enviou";
        $msg = 'Erro' .$mail->ErrorInfo;
    } else {
        header('Location: ../index.php?enviado');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
</head>

<body>
    <h1>Contact us</h1>
    <?php if (!empty($msg)) {
        echo "<h2>$msg</h2>";
    } ?>
    <form method="POST">
        <label for="name">Name: <input type="text" name="name" id="name"></label><br>
        <label for="email">Email address: <input type="email" name="email" id="email"></label><br>
        <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>