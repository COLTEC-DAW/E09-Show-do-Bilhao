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
            setcookie("n_id", $id);



            $aux = carregaResposta($id);
            setcookie("rsp", $aux);
            
            carregaPergunta($id);

            echo "<p>Pontuação: " . $id . "</p><br><br>";

            
            echo "<br><br><a class='btn btn-primary btn-large' href='logout.php'>Logout</a><br><br>";

            require 'rodape.inc';            

        ?>



    </body>
</html>