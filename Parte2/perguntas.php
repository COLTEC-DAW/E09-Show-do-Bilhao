<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>O Show do Bilhão</title>
    </head>

    <body>
        
        <?php 
            require 'perguntas.inc';

            $id = $_GET["id"];
            while($id<6){
                carregaPergunta($id);
                $id++;
            }

            require 'rodape.inc';
        ?>

    </body>
</html>