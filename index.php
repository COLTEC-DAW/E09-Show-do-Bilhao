<!-- Importações -->
<?php require "./assets/classes/Gerenciador.inc" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script defer src="./assets/javascript/main.js" ></script>
    
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "./assets/partials/menu.inc"?>

    <main>
        <div class="pergunta">
            <?php
                $game = new Gerenciador();

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
                    echo "<h3 class='game_over'>GAME OVER</h3>";
                    $game->pontuacao = $id - 1;
                }
            ?>

        </div>
    </main>

    <?php 
        include "./assets/partials/rodape.inc";
        rodape($game->pontuacao);
    ?>
</body>
</html>