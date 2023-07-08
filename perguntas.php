<?php 

    require("./perguntas.inc");//remover esses .php dps (dos arquivos tmb)
    require("./classes.inc");

    $id = $_POST["id"];
    $escolha = $_POST["escolha"];

    if($id != 0){

        $verifica = verificaResultado($escolha, $id);

    }
    else {

        $verifica = true;

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Pergunta <?php echo $id + 1 ?></title>
</head>
<body>
    
    <?php 
    
        date_default_timezone_set("America/Sao_Paulo");

        $nameCookie = "ultimo" . $_SESSION["login"];

        $tempoAgora = date("d/m/Y") . " às " . date("H:i:s");

        setcookie($nameCookie, $tempoAgora);

        if($id <= NUM_QTS && $verifica == true){

            include("./menu.inc");

        }
        include("infoJogador.inc");
    
        if($verifica == true){
           
           $pergunta = new Question();
            
            $pergunta = carregaPergunta($id);

            if($id <= NUM_QTS){
                echo '<div class="perguntas">';
                echo "<h3>$pergunta->enunciado</h3>";
                
                echo '<form action="perguntas.php" method="post">';
                echo "<div class='alternativas'>";
                
                for($comp = 0; $comp < NUM_QTS; $comp++){
                
                    $aux = $pergunta->alternativas[$comp];
                    $aux2 = $comp + 1;
                    echo "<div>";
                    echo "<label>";
                    echo "<section id='sec_$aux2'>";
                    echo "<input type='radio' name='escolha' value='$comp' id='opcao_$aux2' onclick='mudaCorClick()'>$aux</input>";
                    echo "</section>";
                    echo "</label>";
                    echo "</div>";
                
                }
                
                $aux = $id + 1;
                
                echo "</div>";
                echo "<input type='submit' id='botao' value='Confirmar' disabled>";
                echo "<input type='hidden' name='id' value='$aux'></input>";
                echo "</div>";
                echo "</form>";
            }
            
        }
        else {

            carregaFim($id);

        }

        include("./rodape.inc");

    ?>

    <script src="script.js"></script>
</body>
</html>