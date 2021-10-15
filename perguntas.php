<?php
    require "./perguntas.inc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhao!!</title>
</head>
<body>
    <?php
        include "./menu.inc";
    ?>
    <div>
        <h1>Show do Bilhao!!</h1>
        <p>
            
            <?php
                for($i = 0;$i<count($GLOBALS["perguntas"]);$i++){
                    echo "\nPergunta " . ($i + 1) . "\n\n";
                    $pergunta_ = carregaPergunta($i);
                    mostra_pergunta($pergunta_);
                }
            ?>
        </p>
    </div>
    <?php
        include "./rodape.inc";
    ?>

</body>
</html>