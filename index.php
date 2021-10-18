<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello, PHP!</title>
</head>
<body>
    <div>
        <?php include "menu.inc"; ?>
    </div>
    <div>
        <p>
            <?php require "show.inc";
            carregaPergunta($_GET['id']);
            ?>
        </p>
    </div>
    <div>
        <?php include "rodape.inc"; ?>
    </div>
</body>
</html>