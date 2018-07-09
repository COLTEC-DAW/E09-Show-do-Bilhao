<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prova de Conceito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php include "Includes/menu.inc" ?>

    <div class="pergunta"> 
        <form action="/perguntas.php" method="post">

            <?php 
                require "Includes/perguntas.inc";           
                carrega_perguntas($perguntas, $alternativas);
            ?>

            <button type="submit" class="btn btn-primary">Próximo</button>
        </form>
    </div>
    
    <?php include "Includes/footer.inc"; ?>
    
</body>
</html>