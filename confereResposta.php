<?php
$pergunta = $_POST["id"];
$resposta = $_POST["forms"];
$resCorreta = $_POST["opCorreta"];

if ($resposta == $resCorreta) {
    if ($pergunta < 4) {
        header("Location: index.php?id=" . ($pergunta + 1));
    } else {
        header("Location: win.php");
    }
} else {
    header("Location: gameOver.php");
}
