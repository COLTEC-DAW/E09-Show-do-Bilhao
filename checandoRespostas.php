<?php
    include "sessoesCookies.inc";
    //Pega o valor da chave answer;
    $resposta = $_POST["resposta"];

    //Pega o valor da pergunta atual que veio através do hidden input fields.
    $numeroDaPerguntaAtual = $_POST["pergunta"];

    //Pega a posição correta da pergunta a ser analisada
    $resCorreta = $_POST["respostaCorreta"];

    //Pergunta numero 4 corresponde à 5° pergunta, pois a numeração vai de 0 a 4, sendo 5 perguntas.
    if($numeroDaPerguntaAtual == 4 && $resposta == $resCorreta)
    {
        defineGameCookies(5);
        header("Location: http://localhost/DAW-E09/winning.php");
    }
    else if($resposta == $resCorreta)
    {
        header("Location: http://localhost/DAW-E09/perguntas.php?id=".($numeroDaPerguntaAtual+1));
    }
    else
    {
       defineGameCookies($numeroDaPerguntaAtual);
        header("Location: http://localhost/DAW-E09/gameOver.php");
    }
?>