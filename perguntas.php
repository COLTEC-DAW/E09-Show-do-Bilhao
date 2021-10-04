<?php 
    // Inclusão dos dados das pergunstas.
    include "Lib\\Data.inc";
    // Inclusão do menu superior..
    include "Lib\\Menu.inc"; 
    // Inclusão do footer.
    include "Lib\\rodape.inc";
    // Inclusão do método de formatação da pergunta.
    include "Lib\\perguntas.inc";
    // Inclusão da tela de sucesso.
    include "Lib\\win.inc";
    // Inclusão da tela de um fracasso miserável.
    include "Lib\\lose.inc";

    $_POST["Pontos"] = (int) $_POST["Pontos"];
    $_POST["FinalP"] = (int) $_POST["FinalP"];
    $_POST["LastIndex"] = (int) $_POST["LastIndex"];
    $_POST["Alternativa"] = (int) $_POST["Alternativa"];
    $Index_s = (array) explode('/', $_POST["JaSorteados"]);
    
    function GetAction(){
        return "perguntas.php?id=" . $GLOBALS["Index_s"][($_POST["Pontos"]+1)];
    }

    function QuestUpdate(){
        if($_POST["LastIndex"] != -1){
            if($GLOBALS["IndexCorreta"][$_POST["LastIndex"]] == $_POST["Alternativa"]){
                // Acertou
                $_POST["Pontos"]++;
            }else{
                echo GetLoseHtml();
                return;
            }

            if($_POST["Pontos"] == 5){
                echo GetWinHtml();
                return;
            }
        }

        $_POST["LastIndex"] = $_GET["id"];

        return carregaPergunta($_GET["id"]);
    }

    function GetScore(){
        if($_POST["LastIndex"] == -1) return 0;
        return ($GLOBALS["IndexCorreta"][$_POST["LastIndex"]] == $_POST["Alternativa"]) ? $_POST["Pontos"] + 1 : $_POST["Pontos"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
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
    
    <!-- Perdeu -->
    <div>

    </div>

    <!-- Parte inferior -->
   <?php echo GetFooter() ?>
</body>
</html>