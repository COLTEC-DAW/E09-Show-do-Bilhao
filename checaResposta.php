<?php
session_start();
$pergunta = $_POST["id"];
$resposta = $_POST["formulario"];
$resCorreta = $_POST["altCorreta"];

if ($resposta == $resCorreta){
    $_SESSION['HobbesfaelMartins']++;
    if($pergunta == 5){
        defineCookies($pergunta);
        header("Location: vitoria.php");
    }else{
        defineCookies($pergunta);
        header("Location: index.php?id=" . $pergunta + 1);
    }
}else{
    defineCookies($pergunta);
    header("Location: gameOver.php");
}

function defineCookies($id){
    $pontuacao = $pergunta * 1000;
    $usuario = $_SESSION['usuario'];

    $data = date('d/m/Y');

    setcookie("lastGame" . $usuario, $data);
    setcookie("lastScore" . $usuario, $pontuacao);
}
?>