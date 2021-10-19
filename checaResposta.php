<?php
$pergunta = $_POST["id"];
$resposta = $_POST["formulario"];
$resCorreta = $_POST["altCorreta"];

if ($resposta == $resCorreta){
    header("Location: index.php?id=" . $pergunta + 1);
}else{
    header("Location: gameOver.php");
}
?>