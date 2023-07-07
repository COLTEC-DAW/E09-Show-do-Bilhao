<?php
//cria a sessão, remove todas as variaveis da sessão e destroi a sessão
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>
