<?php
    $respostaCorreta = htmlspecialchars($_POST["respostaCorreta"]);
    $respostaInserida = htmlspecialchars($_POST["questao"]);

    if(trim($respostaInserida) == trim($respostaCorreta))
    {
        echo "resposta correta";
    }
    else
    {
        echo "resposta errada";
    }

?>