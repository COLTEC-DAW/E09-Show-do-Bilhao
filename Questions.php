<?php

require "./questions.inc";

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
        include "menu.inc";
        require_once "questions.inc";

        if(empty($_GET)){

            mostraPergunta(0);
            

        }else{

            mostraPergunta($_GET['id']);            

        }

    //if(verificaID($_GET["id"])){

    //    exibePergunta($_GET["id"]);

    //}
    
    ?>

    <?php
    include "rodape.inc";
    ?>
</body>

</html> 