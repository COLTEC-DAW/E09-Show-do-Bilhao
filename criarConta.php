<?php
session_start();

// Verifica se o usuário já está autenticado, redireciona para a página de perguntas
if (isset($_SESSION['usuario'])) {
    header("Location: perguntas.php");
    exit();
}

// Função para verificar se o
?>
