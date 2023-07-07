<?php
    require "perguntas.inc.php";
    
    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
    } 
    else $id = 0;

    if(isset($_POST["acertos"]))
    {
        $acertos = $_POST["acertos"];
    } 
    else $acertos = 0;
    
    if($id < 0)
    {
        echo '<form id="nao_sucesso" action="nao_sucesso.php" method="POST">';
        echo '<input type="hidden" name="acertos" value="' . $acertos . '">';
        echo '</form>';

        echo '<script>document.getElementById("nao_sucesso").submit();</script>';
        exit;
    } 
    else if($id > 4)
    {
        header("Location: sucesso.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Show do Bilhão</title>
    </head>
    <body class="content">
        <h1>Questão <?php echo $id + 1 ?></h1><br>
        <?php
            $questao = carregaPergunta($id);
            $id++;
            echo '<p class="enunciado-questao" >'. $questao->enunciado . '</p>';
            echo '<form action="jogo.php?id=' . $id . '" method="POST" class="opcoes">';

            foreach ($questao->alternativas as $key => $alternativa) 
            {
                if($key == $questao->resposta)
                {
                    if ($id > 0) $acertos++;
                    echo '<input type="radio" name="id" value="' . $id . '" >' . $alternativa . "<br>";
                } 
                else 
                {
                    echo '<input type="radio" name="id" value="-2"required>' . $alternativa . "<br>";
                }
            }

            echo '<input type="hidden" name="acertos" value="' . $acertos . '">';
            echo '<input type="submit" value="Continuar" class="to_be_continue"> ' . "<br>";
            echo '</form>';

            switch($acertos)
            {
                case 1:
                    echo '<div class="w3-blue" style="height:24px;width:0%"></div>';
                    break;
                case 2:
                    echo '<div class="w3-blue" style="height:24px;width:20%"></div>';
                    break;
                case 3:
                    echo '<div class="w3-blue" style="height:24px;width:40%"></div>';
                    break;
                case 4:
                    echo '<div class="w3-blue" style="height:24px;width:60%"></div>';
                    break;
                case 5:
                    echo '<div class="w3-blue" style="height:24px;width:80%"></div>';
                    break;
            }

            if($acertos != 1) {
                echo $acertos - 1 . ' acerto(s) </p>';
            }
        ?>
    </body>
</html>