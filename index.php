<!-- Importações -->
<?php 
    require "MVC/Constrolers/Gerenciador.inc";
    require "MVC/Models/Usuario.inc";
?>

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

                // Inicializa a sessão
                session_start();
                if(isset($_POST["login"])) {
                    $game->autentica($_POST["login"], $_POST["senha"]);
                }
                require "./MVC/Constrolers/logout.inc";
            ?>

            <?php
                // Se não está logado carrega a pagina de login
                if(!(isset($_SESSION["usuario"]))) {
                    require "./MVC/Views/login.php";
                }
                else if($id+1 > $game->nPerguntas) {
                    $game->pontuacao++;
                    ?>
                        <!-- =============== -->
                            <h3 class="tela_final">PARABENS VOCE VENCEU</h3>
                        <!-- =============== -->
                    <?php

                    // Seta o cookie de pontos
                    setcookie("pontos", $game->pontuacao);
                    setcookie("user", $_SESSION["usuario"]->user);
                }
                // primeira pergunta ou acertou a anterior
                else if($id == 0 || $game->buscaAlternativaCorreta($id - 1) == $_POST["resp"]) {
                    if($id != 0) {
                        $game->pontuacao++;
                    }
                    require "./MVC/Views/questao.php";
                }
                // se errou carrega pagina de gameover
                else {
                    ?>
                        <!-- =============== -->
                            <h3 class="tela_final">GAME OVER</h3>
                        <!-- =============== -->
                    <?php

                    // Seta o cookie de pontos
                    setcookie("pontos", $game->pontuacao);
                    setcookie("user", $_SESSION["usuario"]->user);
                }
            ?>

        </div>
    </main>

    <?php 
        include "MVC/Views/rodape.inc";
    ?>
</body>
</html>