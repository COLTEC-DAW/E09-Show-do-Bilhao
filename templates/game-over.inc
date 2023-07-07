<?php
$n_acertos = isset($_COOKIE["n_acertos"]) ? $_COOKIE["n_acertos"] : 0;
setcookie("n_acertos");
setcookie("n_acertos", $n_acertos , 0 , "/");

session_unset(); 
?>


<main style="flex-direction:column">
    <h2 class="enunciado"> GAME-OVER </h2>

    <p>Pontuação: <?php echo $n_acertos; ?></p>

    <a style="padding:20px" href="../index.php?id=0">Reiniciar</a>

</main>