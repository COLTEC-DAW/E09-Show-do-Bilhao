<?php
session_start();

// Função para autenticar o jogador
function autenticarJogador($nome) {
    $_SESSION['jogador'] = $nome;
    if (!isset($_SESSION['pontuacao'])) {
        $_SESSION['pontuacao'] = 0;
    }
    $_SESSION['ultimo_acesso'] = time();
    setcookie('jogador', $nome, time() + (86400 * 30), '/');
}

// Função para fazer logout do jogador
function logoutJogador() {
    session_unset();
    session_destroy();
    setcookie('jogador', '', time() - 3600, '/');
}

// Verifica se o jogador está autenticado
function jogadorAutenticado() {
    return isset($_SESSION['jogador']);
}

// Verifica se o jogador está autenticado e redireciona para a página de autenticação caso contrário
function verificarAutenticacao() {
    if (!jogadorAutenticado()) {
        header("Location: cadastro.php");
        exit;
    }
}

// Verifica se o jogador está autenticado e atualiza o último acesso
function verificarAutenticacaoAtualizarAcesso() {
    if (jogadorAutenticado()) {
        $_SESSION['ultimo_acesso'] = time();
    }
}
?>