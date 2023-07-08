<?php
session_start();

// Limpar todas as variáveis de sessão
$_SESSION = array();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login ou qualquer outra página
header("Location: login.php");
exit();
?>
