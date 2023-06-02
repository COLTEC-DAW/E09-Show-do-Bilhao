<!-- Importações -->
<?php require "PerguntaMaker.inc" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
        $game = new PerguntaMaker();

        if(isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        else {
            $id = 0;
        }
    ?>
    
    <form action="index.php?id=<?php echo $id+1?>" method="POST">
        <label for="resp">
            <?php
                $game->carregaPergunta($id);
            ?>
        </label>
        
        <input type="submit" name="Confirmar resposta" id="BotaoEnviar">
    </form>
</body>
</html>