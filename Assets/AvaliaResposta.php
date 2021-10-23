<?php

$perguntaAtual =$_POST["id"];
    $respostaQ =$_POST["option"];
    $resCorretaQ =$_POST["gabaritoQ"];

    if ($respostaQ == $resCorretaQ)
    {

        $_SESSION["points"]++;

        if($perguntaAtual == 4)
        {
            SetCookies();
            header("Location: ./Venceu.inc");
        }
        else
        {
            header("Location: Perguntas.php?id=" . $perguntaAtual + 1);
        }
    }
    else
    {
        SetCookies();
        header("Location: ./Perdeu.inc");
    }


?>