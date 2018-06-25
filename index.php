<?php require "perguntas.inc"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show do Bilhão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php include "menu.inc" ?>

    <h1>O show do bilhão</h1>
    <div class="perguntas">
        <?php
            $int = $_GET['pergunta'];
            if($int==null) $int = 0;
            $pergunta = carregaPergunta($int);

            if($pergunta>=5) echo"
                    <a href=\"index.php?pergunta=0\">Reiniciar</a>
                </div>
                ";
            else echo"
                    <a href=\"index.php?pergunta=$pergunta\">Próxima</a>
                </div>
                ";
        ?>
    </div>

    <?php include "rodape.inc" ?>

</body>
</html>