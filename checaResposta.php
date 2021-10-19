<?php
$pergunta = $_POST["id"];
$resposta = $_POST["formulario"];
$resCorreta = $_POST["altCorreta"];

if ($resposta == $resCorreta){
    if($pergunta == 5){
        header("Location: vitoria.php");
    }else{
        header("Location: index.php?id=" . $pergunta + 1);
    }
}else{
    header("Location: gameOver.php");
}
?>