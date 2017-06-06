<?php
    ob_start(); // Initiate the output buffer
?>


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
            echo "ID:" .$id;
            setcookie("id", $id);

            echo "<p>Pontuação: " . $id . "</p>";

            $aux = carregaResposta($id);
            setcookie("rsp", $aux);
            
            carregaPergunta($id);



            require 'rodape.inc';            

        ?>



    </body>
</html>