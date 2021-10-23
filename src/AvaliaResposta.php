<?php

    require "./sessão.php";

    $perguntaAtual =$_POST["id"];
    $respostaQ =$_POST["option"];
    $resCorretaQ =$_POST["gabaritoQ"];

    if ($respostaQ == $resCorretaQ)
    {

        $_SESSION["points"]++;

        if($perguntaAtual == 4)
        {
            SetCookies();
            header("Location: ../Inc/VoceVenceu.inc");
        }
        else
        {
            header("Location: perguntas.php?id=" . $perguntaAtual + 1);
        }
    }
    else
    {
        SetCookies();
        header("Location: ../Inc/PerdeuAmigao.inc");
    }
?>