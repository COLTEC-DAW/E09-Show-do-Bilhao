<?php
    require "perguntas.inc.php";
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }

    if($id == -1){
        header("Location: GameOver.html");
        exit;
    }

    if($id > 4){
        header("Location: Winner.html");
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
    <?php
        $questao = carregaPergunta($id);
    ?>

    <h1>Questão <?php echo $questao[0]?></h1>
    <p> <?php echo $questao[1]?></p>

    <?php
    
        for ($i=2; $i < 6; $i++) { 
            echo $questao[$i] . "<br>";
        }
    ?>

    <form action="jogo.php" method="get">
        <input type="hidden" name="id" value=<?php echo $id + 1?>>
        <input type="submit" value="Prox">
    </form>
</body>
</html>
</body>
</html>