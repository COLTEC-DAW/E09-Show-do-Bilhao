<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do Bilhão</title>

</head>
    <body>
        
        <?php 

            $menu = "menu.inc";
            $perguntas = "perguntas_bilhao.inc";
            $rodape = "rodape.inc";


            include $menu;
            include $perguntas;

            pergunta($_GET["id"]);

            include $rodape;

        ?>

    </body>
</html>