<?php
    require "perguntas.inc.php";
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }

    if($id < 0){
        header("Location: gameOver.php");
        exit;
    }

    if($id > 4){
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

        echo '<form action="jogo.php" method="get">';
            foreach ($questao->alternativas as $key => $alternativa) {
                if($key == $questao->resposta){
                    $id = $id + 1;
                    echo '<input type="radio" name="id" value="' . $id. '">' . $alternativa . "<br>";
                }else{
                    echo '<input type="radio" name="id" value="-2">' . $alternativa . "<br>";
                }
                
            }
            echo '<input type="submit" value="Prox">' . "<br>";
        echo '</form>';
    ?>


</body>
</html>
</body>
</html>