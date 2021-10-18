<?php

require "perguntas.inc";
require "dados.php";
require "menu.inc";
require "rodape.inc";

echo menu(
    "<a href='index.php'>Home</a>",
    "<a href='provaDeConceito.php'>Prova de Conceito</a>"
);
echo getAllQuestion();
echo rodape("Developed by ",
    "O incrível",
    "O inigualável",
    "O magnânimo",
    "O inexorável",
    "O estupendo",
    "IAGO!!!"      
);
