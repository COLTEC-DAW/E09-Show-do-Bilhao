<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>
</head>
    <body>
        <div>
            <?php include "menu.inc"; ?>
        </div>
        
        <div>
            <?php 
                require "perguntas.inc";
                if(isset($_GET['id'])){
                    carregaPerguntas($_GET['id']); 
                }
                else{
                    carregaPerguntas(0);
                }
            ?>
        </div>

        <?php include "rodape.inc"; ?>
    </body>
</html> 