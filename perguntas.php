<?php 
    include "Info\data.inc";
    include "Info\menu.inc"; 
    include "Info\perguntas.inc";
    include "Info\Rodape.inc"; 
    include "Info\perdeu.inc";
    include "Info\Venceu.inc";

    $_POST["Pontos"] = (int) $_POST["Pontos"];
    $_POST["Final"] = (int) $_POST["Final"];
    $_POST["UltimoIndex"] = (int) $_POST["UltimoIndex"];
    $_POST["Opcao"] = (int) $_POST["Opcao"];
    $Index_s = (array) explode('/', $_POST["Sorteados"]);

    function Acao(){
        return "perguntas.php?id=" . $GLOBALS["Index_s"][($_POST["Pontos"]+1)];
    }

    function atualizaPergunta(){
        if($_POST["UltimoIndex"] != -1){
            if($GLOBALS["IndiceCorreta"][$_POST["UltimoIndex"]] == $_POST["Opcao"]){
                $_POST["Pontos"]++;
            }else{
                echo perdeuHtml();
                return;
            }

            if($_POST["Pontos"] == 5){
                echo venceuHtml();
                return;
            }
        }
        $_POST["UltimoIndex"] = $_GET["id"];
        return carregaPergunta($_GET['id']);
    }

    function pontuacao(){
        if($_POST["UltimoIndex"] == -1) return 0;
        return ($GLOBALS["IndiceCorreta"][$_POST["UltimoIndex"]] == $_POST["Opcao"]) ? $_POST["Pontos"] + 1 : $_POST["Pontos"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php echo Menu() ?>
    <div class="progress">
        <?php echo pontuacao() . " pontos"?>
    </div>
    <?php echo atualizaPergunta(); ?>
    <div></div>
    <?php echo Rodape()?>
</body>
</html> 