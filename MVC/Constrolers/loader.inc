<?php
    // Se id veio na requisição a variavel assume tal valor
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    // Se não, é a primeira questão
    else {
        $id = 0;
    }

    // Carrega o controler geral do jogo
    $game = new Gerenciador();
    $perguntaAtual = $game->carregaPergunta($id);

    if(isset($_POST["pontuacao"])) {
        $game->pontuacao = $_POST["pontuacao"];
    }

    // Inicializa a sessão
    session_start();
    if(isset($_POST["login"])) {
        // Se não está autenticado aparece mensagem de erro
        if (!($game->autentica($_POST["login"], $_POST["senha"]))) {
            ?>
                <p style="color: red; font-weight: 700;">* Login e/ou senha errado *</p>
            <?php
        }
    }
    require "./MVC/Constrolers/logout.inc";
?>
