<!-- Importações -->
<?php 
    require "MVC/Constrolers/Gerenciador.inc";
    require "MVC/Models/Usuario.inc";
    require "MVC/Views/telaFinal.php";
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
                // Carrega informações e objetos utilizados
                require "./MVC/Constrolers/loader.inc";

                // Se não está logado carrega a pagina de login
                if(!(isset($_SESSION["usuario"]))) {
                    require "./MVC/Views/login.php";
                }
                else if($id+1 > $game->nPerguntas) {
                    $game->pontuacao++;
                    
                    tela_final(true);
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

                    tela_final(false);
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