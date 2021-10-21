<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php include "menu.inc"; ?>
    </div>
    <div>
        <p>
            <?php require "show.inc";
            if(empty($_GET))
            {
                carregaPergunta(1); 
            }
            else
            {
                carregaPergunta($_GET['id']); 
            }
            ?>
        </p>
    </div>
    <div>
        <?php include "rodape.inc"; ?>
    </div>
</body>
</html>