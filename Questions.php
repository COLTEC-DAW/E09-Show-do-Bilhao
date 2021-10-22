<?php

require "questions.inc";
if (session_status() == PHP_SESSION_NONE) session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IaE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Show do Real</title>

</head>

<body>

    <?php

        require_once "questions.inc";


        if(empty($_GET)){

            echo "Jogador: ". $_SESSION["user"];
            echo "<br>";
            

            mostraPergunta(0);
            

        }else{

            echo $_GET["id"] . "/5 Respondidos corretamente<br><br>";
            echo "Jogador: ". $_SESSION["user"];
            echo "<br>";
            echo $_SESSION["points"];
            
            mostraPergunta($_GET['id']);  

            
        }
               
    ?>

    <?php
        if (isset($_COOKIE["lastPoints" . $_SESSION["user"]]) && isset($_COOKIE["lastGame" . $_SESSION["user"]])) { ?>

            <h3>Último jogo: <?= $_COOKIE["lastGame" . $_SESSION["user"]] ?></h3>

            <h3>Última pontuação: <?= $_COOKIE["lastPoints" . $_SESSION["user"]] ?></h3>

    <?php } ?>

  

    <?php
        echo "\n\n\n\n\n";

        include "rodape.inc";

    ?>
</body>

</html> 