<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            if(isset($_COOKIE["pergunta"])){
                include 'menu.inc';
                require 'functions.inc';
                $id_pergunta = $_COOKIE["pergunta"];
                carregaPergunta($id_pergunta);
                include 'rodape.inc';

                echo "Última pontuação: ".$_COOKIE["pontos"];
                echo "</br>Última vez jogada: ".$_COOKIE["tentativa"];
            }
            else{
                echo "<h1>Favor identificar-se antes de jogar</h1>";
            }
        ?>
    </body>
</html>