<?php
    require "perguntas.inc.php";
    
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
        echo '<form id="gameOverForm" action="gameOver.php" method="post">';
        echo '<input type="hidden" name="acertos" value="' . $acertos . '">';
        echo '</form>';
        echo '<script>document.getElementById("gameOverForm").submit();</script>';
        exit;
    } else if($id > 4){
        header("Location: winner.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <h1>Questão <?php echo $id + 1 ?></h1>
    
    <?php
        $questao = carregaPergunta($id);
        
        echo $questao->enunciado . "<br><br>";

        echo '<form action="jogo.php" method="post">';
        foreach ($questao->alternativas as $key => $alternativa) {
            if($key == $questao->resposta){
                $id++;
                if ($id > 0) {
                    $acertos++;
                }
                echo '<input type="radio" name="id" value="' . $id . '">' . $alternativa . "<br>";
            } else {
                echo '<input type="radio" name="id" value="-2">' . $alternativa . "<br>";
            }
        }
        echo '<input type="hidden" name="acertos" value="' . $acertos . '">';
        echo '<input type="submit" value="Prox">' . "<br>";
        echo '</form>';

        if($acertos != 0){
            echo $acertos - 1 . ' acertos </p>';
        }
    ?>

</body>
</html>
