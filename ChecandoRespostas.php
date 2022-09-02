<?php
    $resposta = $_POST["resposta"];
    $perguntaAtual = $_POST["pergunta"];
    $alternativaCorreta = $_POST["respostascorretas"];
    if($perguntaAtual == 4 && $resposta == $alternativaCorreta ){
        header("Location: http://localhost/O-Show-do-Bilhao/Ganhou.php"); 
    }
    else if($resposta == $alternativaCorreta){
        header("Location: http://localhost/O-Show-do-Bilhao/perguntas.php?id=".($perguntaAtual+1)."");
    }
    else{
        header("Location: http://localhost/O-Show-do-Bilhao/GameOver.php");
    
    }
?>