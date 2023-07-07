<?php
    require "perguntas.inc.php";
    
    if(isset($_POST["id"])){
        $id = $_POST["id"];
    } else {
        $id = 0;
    }

    if(isset($_POST["corretas"])){
        $corretas = $_POST["corretas"];
    } else {
        $corretas = 0;
    }

    if($id < 0){
        echo '<form id="gameOverForm" action="gameOver.php" method="post">';
        echo '<input type="hidden" name="corretas" value="' . $corretas . '">';
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
        $question = carregaPergunta($id);
        $id++;
        
        echo $question->text . "<br><br>";

        echo '<form action="jogo.php?id=' . $id . '" method="post">';
        foreach ($question->alternatives as $key => $alternative) {
            if($key == $question->answer){
                
                if ($id > 0) {
                    $corretas++;
                }
                echo '<input type="radio" name="id" value="' . $id . '">' . $alternative . "<br>";
            } else {
                echo '<input type="radio" name="id" value="-2">' . $alternative . "<br>";
            }
        }
        echo '<input type="hidden" name="corretas" value="' . $corretas . '">';
        echo '<input type="submit" value="Prox">' . "<br>";
        echo '</form>';

        if($corretas != 0){
            echo $corretas - 1 . ' corretas </p>';
        }
    ?>

</body>
</html>