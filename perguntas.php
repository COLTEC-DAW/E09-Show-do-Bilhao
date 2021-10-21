<?php 
    // Importe de classes
    require "Models\\Question.php";
    require "Models\\User.php";
    require "Models\\GameData.php";

    // Importe de funcionalidades
    include "Lib\\Data.inc";
    include "Lib\\Menu.inc"; 
    include "Lib\\rodape.inc";
    include "Lib\\perguntas.inc";
    include "Lib\\win.inc";
    include "Lib\\lose.inc";

    // Inicialização da sessão
    session_start();

    $Logado = true;
    if(!isset($_SESSION['PlayerData'])) {
        echo "</br>" . "Você precisa fazer o <a href='login.php'>Login</a> para acessar as perguntas!" . "</br></br>";
        $Logado = false;
    }

    if(!isset($_POST["Alternativa"])){
        $_POST["Alternativa"] = -1;
    }

    // Concatena a proxima página ao id da pergunta.
    function GetAction(){
        return "perguntas.php?id=" . $_SESSION['GameData']->IndicesQuestoes[$_SESSION['GameData']->RoundAtual];
    }

    // Faz a verificação dos dados atuais, adiciona ponto e/ou encerra o jogo.
    function QuestUpdate(){
        if(!$GLOBALS["Logado"]) return;
        if($_SESSION['GameData']->RoundAtual != 0){
            if($GLOBALS["Perguntas"][$_SESSION['GameData']->LastIndex]->Resposta == $_POST["Alternativa"]){
                // Acertou
                $_SESSION['GameData']->Pontuacao++;
            }else{
                // Errou
                echo GetLoseHtml();
                
                $data = date('d/m/Y H:i');
                setcookie($_SESSION['PlayerData']->UserName . "_UltimoJogo_Data", $data);
                setcookie($_SESSION['PlayerData']->UserName . "_UltimoJogo_Pontos", $_SESSION['GameData']->Pontuacao);
                return;
            }

            // Jogo completo
            if($_SESSION['GameData']->Pontuacao == 5){
                echo GetWinHtml();

                $data = date('d/m/Y H:i');
                setcookie($_SESSION['PlayerData']->UserName . "_UltimoJogo_Data", $data);
                setcookie($_SESSION['PlayerData']->UserName . "_UltimoJogo_Pontos", $_SESSION['GameData']->Pontuacao);
                return;
            }
        }

        $_SESSION['GameData']->RoundAtual++;
        $_SESSION['GameData']->LastIndex = $_GET["id"];

        return carregaPergunta($_GET["id"]);
    }

    // Retorna o número de acertos atual.
    function GetScore(){
        if(!$GLOBALS["Logado"]) return 0;
        if($_SESSION['GameData']->LastIndex == -1) return 0;
        return ($GLOBALS["Perguntas"][$_SESSION['GameData']->LastIndex]->Resposta == $_POST["Alternativa"]) ? $_SESSION['GameData']->Pontuacao + 1 : $_SESSION['GameData']->Pontuacao;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <!-- Progresso -->
    <div class="progresso">
        Porcentagem do jogo: <?php echo 20 * GetScore() . "% completo"?>
    </div>

    <!-- Exibe uma pergunta  --> 
    <?php echo QuestUpdate(); ?>

    <!-- Parte inferior -->
   <?php echo GetFooter(); ?>
</body>
</html>