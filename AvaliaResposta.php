<?php

    $perguntaAtual =$_POST["id"];
    $respostaQ =$_POST["option"];
    $resCorretaQ =$_POST["gabaritoQ"];

    if ($respostaQ == $resCorretaQ)
    {
        if($perguntaAtual == 4)
        {
            header("Location: VoceVenceu.inc");
        }
        else
        {
            header("Location: perguntas.php?id=" . $perguntaAtual + 1);
        }
    }
    else
    {
        header("Location: PerdeuAmigao.inc");
    }
?>