<?php
if (session_status() == PHP_SESSION_NONE) session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ./inicio.php");
}
?>
<div class="col_12 menu">
    <h1>Show do Bilhão</h1>
    <h3>Login: <?= $_SESSION["login"] ?></h3>
    <?php
    if (isset($_COOKIE["ultimapontuacao" . $_SESSION["login"]]) && isset($_COOKIE["ultimojogo" . $_SESSION["login"]])) { ?>
        <h3>Data do ultimo jogo: <?= $_COOKIE["ultimojogo" . $_SESSION["login"]] ?></h3>
        <h3>Ultima pontuação: <?= $_COOKIE["ultimapontuacao" . $_SESSION["login"]] ?></h3>
    <?php } ?>
    <a href='logout.php'><button>Logout</button></a>
</div>