<?php
    $resposta = $_POST["resposta"];
    $perguntaAtual = $_POST["pergunta"];
    $alternativaCorreta = $_POST["respostascorretas"];
    if($perguntaAtual == 3 && $resposta == $alternativaCorreta ){
        header("Location: http://localhost/O-Show-do-Bilhao/ganhou.php"); 
    }
    else if($resposta == $alternativaCorreta){
        header("Location: http://localhost/O-Show-do-Bilhao/perguntas.php?id=".($perguntaAtual+1)."");
    }
    else{
        header("Location: http://localhost/O-Show-do-Bilhao/gameOver.php");

    }
?> 
