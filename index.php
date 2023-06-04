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

        // Se id veio na requisição a variavel assume tal valor
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        // Se não, é a primeira questão
        else {
            $id = 0;
        }
    ?>
    
    <?php
        // primeira pergunta ou acertou a anterior
        if($id == 0 || $game->buscaAlternativaCorreta($id - 1) == $_POST["resp"]) {
            $game->carregaPergunta($id);
        }
        // se errou carrega pagina de gameover
        else {
            echo "GAME OVER";
        }
    ?>
</body>
</html>