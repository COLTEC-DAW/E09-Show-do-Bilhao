<?php
session_start(); // Inicia a sessão

// Realiza o logout
logout();

// Função para realizar o logout
function logout() {
    session_unset();
    session_destroy();

    // Redireciona de volta para o arquivo "index.php"
    header("Location: index.php");
    exit();
}
?>
