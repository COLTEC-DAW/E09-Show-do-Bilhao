<?php
if (session_status() == PHP_SESSION_NONE) session_start();

if (!isset($_SESSION["name"]) || !isset($_SESSION["answer"])) {
    header("Location: ./login.php");
}
?>
<div class="col_12 menu">
    <h1>Show do Bilhão!!</h1>

    <h3>Nome: <?= $_SESSION["name"] ?></h3>

    <!-- Se for o primeiro jogo daquele jogador, não mostra os dados dos últimos - afinal, esses não existem. -->
    <?php
    if (isset($_COOKIE["lastScore" . $_SESSION["name"]]) && isset($_COOKIE["lastGame" . $_SESSION["name"]])) { ?>
        <h3>Último jogo: <?= $_COOKIE["lastGame" . $_SESSION["name"]] ?></h3>
        <h3>Última pontuação: <?= $_COOKIE["lastScore" . $_SESSION["name"]] ?></h3>
    <?php } ?>

    <a href='logout.php'><button>Sair</button></a>
</div>