<!-- Importações -->
<?php require "MVC/Constrolers/Gerenciador.inc" ?>

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
    <?php include "MVC/Views/menu.inc"?>

    <main>
        <div class="pergunta">
            <?php
                //Processamento
                $game = new Gerenciador();

                // Se id veio na requisição a variavel assume tal valor
                if(isset($_GET["id"])) {
                    $id = $_GET["id"];
                }
                // Se não, é a primeira questão
                else {
                    $id = 0;
                }

                $perguntaAtual = $game->carregaPergunta($id);
                if(isset($_POST["pontuacao"])) {
                    $game->pontuacao = $_POST["pontuacao"];
                }
            ?>

            <?php           
                // Se não está logado carrega a pagina de login
                if((isset($_SESSION["login"]))) {
                    require "./login.php";
                } 
                // primeira pergunta ou acertou a anterior
                else if($id == 0 || $game->buscaAlternativaCorreta($id - 1) == $_POST["resp"]) {
                    $game->pontuacao++;
                    $nQuestao = $id+1;
                    $game->pontuacao = $id;
                    ?>
                        <!-- =============== -->
                        <h2 class="pergunta--titulo">Questão <?= $nQuestao ?></h2>
                        <p class="pergunta--enunciado"><?= $perguntaAtual->enunciado ?></p>
                        
                        <form action="index.php?id=<?= $nQuestao ?>" method="POST">
                        <!-- =============== -->                        
                    <?php
                    foreach($perguntaAtual->alternativas as $alternativa){
                        ?>
                            <!-- =============== -->                            
                            <div class="alternativa">
                            <input type="radio" name="resp" value="<?= $alternativa->letra ?>" class = "input--alternativa">
                            <p class="non-selected"><?= $alternativa->letra ?>) <?= $alternativa->resposta ?></p>
                            </div>
                            <!-- =============== -->                            
                        <?php
                    }
                    ?>
                        <!-- =============== -->
                        <input type="hidden" name="pontuacao" value="<?= $game->pontuacao?>">
                        <input type="submit" value="Confirmar resposta" id="BotaoEnviar">
                        </form>
                        <!-- =============== -->
                    <?php            
                }
                // se errou carrega pagina de gameover
                else {
                    ?>
                        <!-- =============== -->
                            <h3 class="game_over">GAME OVER</h3>
                        <!-- =============== -->
                    <?php
                }

            ?>

        </div>
    </main>

    <?php 
        include "MVC/Views/rodape.inc";
        rodape($game->pontuacao);
    ?>
</body>
</html>