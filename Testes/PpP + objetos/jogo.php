<?php
    require "perguntas.inc.php";
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }

    if($id == -1){
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

        foreach ($questao->alternativas as $value) {
            echo $value . "<br>";
        }

        echo $questao->resposta . "<br><br>";
    ?>

    <form action="jogo.php" method="get">
        <input type="hidden" name="id" value=<?php echo $id + 1?>>
        <input type="submit" value="Prox">
    </form>
</body>
</html>
</body>
</html>