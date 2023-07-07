<?php
session_start();

if (isset($_SESSION['last_login'])) {
    $tempoJogado = time() - $_SESSION['last_login'];
    if (isset($_SESSION['tempo_jogado'])) {
        $_SESSION['tempo_jogado'] += $tempoJogado;
    } else {
        $_SESSION['tempo_jogado'] = $tempoJogado;
    }
}
setcookie('last_session', date('d/m/Y H:i:s'), time() + (86400 * 365), "/");
session_destroy();
header("Location: login.php");
exit();
?>
