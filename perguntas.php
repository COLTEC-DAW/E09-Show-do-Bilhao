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
    <div class="pergunta">
        <form action="perguntas.php", method="get">
            <?php
                require "perguntas.inc";
                carrega_pergunta($perguntas[$_GET["id"]], $alternativas[$_GET["id"]], $_GET["id"]);
            ?>  
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>