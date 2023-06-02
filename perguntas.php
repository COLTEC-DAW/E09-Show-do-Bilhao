<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include "perguntas.inc";
    ?>

    <?php 
        $resp_usuario = $_POST["pergunta"]; 
        $id=verificaPergunta($id, $resp_usuario);
    ?>

    <h2><?php $pergunta = carregaPergunta($id)[0]; echo $pergunta; ?></h2>
    <form action="index.php?id=<?php echo $id?>" method="POST">
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta" value="a"> <?php 
                $alt1 = carregaPergunta($id)[2];
                echo $alt1;?>
            </label>
        </div>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta" value="b"> <?php 
                $alt2 = carregaPergunta($id)[3];
                echo $alt2;?>
            </label>
        </div>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta" value="c"> <?php 
                $alt3 = carregaPergunta($id)[4];
                echo $alt3;?>
            </label>
        </div>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta" value="d"> <?php 
                $alt4 = carregaPergunta($id)[5];
                echo $alt4;?>
            </label>
        </div>

        <input class="pergunta" type="submit" name="resp">

    </form>
</body>
</html>


