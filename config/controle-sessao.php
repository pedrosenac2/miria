<?php
// Inicia a sessão
session_start();

// Define o tempo de expiração
$expira_em = 0.2 * 60 * 60; // 

// Define o tempo atual
$tempo_atual = time();

// Verifica se a sessão existe e se o usuário está logado
if (isset($_SESSION['id_sistema']) && $_SESSION['id_sistema'] == 'sislogin2024*') {
    // Verifica se o tempo de inatividade excedeu o tempo de expiração
    if (isset($_SESSION['ultimo_acesso']) && ($tempo_atual - $_SESSION['ultimo_acesso'] > $expira_em)) {
        // Se sim, destroi a sessão e redireciona para a página de login
        session_unset();
        session_destroy();
        header('Location: ../pages/login.php');
        exit;
    } else {
        // Atualiza o tempo de último acesso
        $_SESSION['ultimo_acesso'] = $tempo_atual;
    }
} else {
    // Se o usuário não estiver logado, redireciona para a página de login
    header('Location: ../pages/login.php');
    exit;
}
?>