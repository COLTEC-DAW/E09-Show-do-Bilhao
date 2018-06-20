<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pergunta Separada</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>  
    <?php include "menu.inc" ?> 

    <div class="pergunta">
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $_POST["id"]*20 ?>%" aria-valuenow="<?php echo $_POST["id"] ?>" aria-valuemin="0" aria-valuemax="5"></div>
        </div>

        <form action="perguntas.php", method="post">
            <?php
                require "perguntas.inc";
                if($_POST["id"] == null){
                    carrega_pergunta($perguntas[0], $alternativas[0], 0);   
                }else if ($_POST["pergunta".$_POST["id"]] != "alt".$certas[$_POST["id"] - 1]){
                    perdeu();
                }else if ($_POST["id"] == 5){
                    ganhou();
                }else{
                    carrega_pergunta($perguntas[$_POST["id"]], $alternativas[$_POST["id"]], $_POST["id"]);
                }
                
            ?>  
        </form>
    </div>
    <?php include "footer.inc" ?>
</body>
</html>