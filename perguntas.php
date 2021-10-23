<?php
require "./perguntas.inc";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body class="container">

    <div class="col_12">
        <?php include "menu.inc"; ?>

        <br>
        <hr>

        <div>
            <?php
            if (isset($_GET["id"])) {
                carregaPergunta($_GET["id"]);
            }
            ?>
        </div>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>