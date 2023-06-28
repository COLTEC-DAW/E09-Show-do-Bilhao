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
            ?>

            <?php           
                // Se não tem login ou senha aparece a pagina de login
                if(!(isset($_SESSION["login"])) || !(isset($_SESSION["senha"]))) {
                    ?>
                        <!-- =============== -->
                        <h1>Login</h1>

                        <form action="index.php" method="POST">
                            <label for="nome">Nome: </label>
                            <input type="text">

                            <label for="nome">Senha: </label>
                            <input type="password">

                            <input type="submit">
                        </form>
                        <!-- =============== -->
                    <?php
                } else {
                    // primeira pergunta ou acertou a anterior
                    if($id == 0 || $game->buscaAlternativaCorreta($id - 1) == $_POST["resp"]) {
                        $nQuestao = $id+1;
                        $count = 0;
                        $game->pontuacao = $id;
                        ?>
                            <!-- =============== -->
                            <h2 class='pergunta--titulo'>Questão <?= $nQuestao ?></h2>
                            <p class='pergunta--enunciado'><?= $perguntaAtual->enunciado ?></p>
                            
                            <form action='index.php?id=<?= $nQuestao ?>' method='POST'>
                            <!-- =============== -->                        
                        <?php
                        foreach($perguntaAtual->alternativas as $alternativa){
                            ?>
                                <!-- =============== -->                            
                                <div class='alternativa'>
                                <input type='radio' name='resp' id='resp$count' value='<?= $alternativa->letra ?>' class = 'input--alternativa'>
                                <p class='non-selected'><?= $alternativa->letra ?>) <?= $alternativa->resposta ?></p>
                                </div>
                                <!-- =============== -->                            
                            <?php
                            $count++;
                        }
                        ?>
                            <!-- =============== -->
                            <input type='submit' value='Confirmar resposta' id='BotaoEnviar'>
                            </form>
                            <!-- =============== -->
                        <?php
                    }
                    // se errou carrega pagina de gameover
                    else {
                        $game->pontuacao = $id - 1;
                        ?>
                            <!-- =============== -->
                                <h3 class='game_over'>GAME OVER</h3>
                            <!-- =============== -->
                        <?php
                    }
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