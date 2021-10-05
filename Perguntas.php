<?php

    include "Assets\Dados.inc";
    include "Assets\Menu.inc";
    include "Assets\Pergunta.inc";
    include "Assets\Rodape.inc";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
</head>
<body>
    
    <?php echo GetMenu() ?>
    <?php echo GetPergunta($_GET["id"])?>
    <?php echo GetRodape()?>
</body>
</html>