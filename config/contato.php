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

$mail->Body = ($mensagem);
// n12br 
$mail->AltBody = (strip_tags($mensagem));
// n12br

if (!$mail->send()) {
    echo "Erro não enviou";
    $msg = 'Erro' . $mail->ErrorInfo;
} else {
    header('Location: ../index.php?enviado');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

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
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento">
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa:</label>
            <input type="text" name="empresa">
        </div>
        <div class="form-group">
            <label for="colaboradores">Número Aproximado de Colaboradores:</label>
            <input type="number" name="colaboradores">
        </div>
        <div class="form-group">
            <label for="area_atuacao">Área de Atuação:</label>
            <input type="text" name="area_atuacao">
        </div>
        <div class="form-group">
            <label for="mensagem">Deixe uma mensagem:</label>
            <textarea name="mensagem"></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" id="aceita_termos" class="form-check-input" required>
            <label for="aceita_termos" class="form-check-label">Ao clicar em Enviar você está aceitando os termos da
                nossa política de privacidade</label>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>