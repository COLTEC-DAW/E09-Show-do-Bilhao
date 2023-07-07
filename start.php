<?php
    require "questions.inc.php";
    if(isset($_POST["id"])){
        $id = $_POST["id"];
    } else {
        $id = 0;
    }
    if(isset($_POST["acertos"])){
        $acertos = $_POST["acertos"];
    } else {
        $acertos = 0;
    }
    if($id < 0){
        echo '<form id="ifLost" action="lost.php" method="post">';
        echo '<input type="hidden" name="acertos" value="' . $acertos . '">';
        echo '</form>';
        echo '<script>document.getElementById("ifLost").submit();</script>';
        exit;
    } else if($id > 3){
        header("Location: won.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela-start</title>
</head>
<body>
    <div class="pergunta">
    <h1>Questão <?php echo $id + 1 ?></h1>
    
    <?php
        $perguntaVez = mudaPergunta($id);
        $id++;
        echo $perguntaVez->enunciado . "<br><br>";
        echo '<form action="start.php?id=' . $id . '" method="post">';
        foreach ($perguntaVez->alternativas as $key => $opcao) {
            if($key == $perguntaVez->resposta){
                
                if ($id > 0) {
                    $acertos++;
                }
                echo '<input type="radio" name="id" value="' . $id . '">' . $opcao . "<br><br>";
            } else {
                echo '<input type="radio" name="id" value="-1">' . $opcao . "<br><br>";
            }
        }
        echo '<input class="iniciar" type="hidden" name="acertos" value="' . $acertos . '">';
        echo '<input class="iniciar" type="submit" value="Próxima questão">' . "<br>";
        echo '</form>';
        if($acertos != 0){
            echo $acertos - 1 . ' acertos </p>';
        }
    ?>
</div>
</body>
</html>