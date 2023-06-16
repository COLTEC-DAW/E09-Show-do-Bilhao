<?php
    require "../questions/loadQuestion.inc.php";

    $numPerguntas = count(json_decode(file_get_contents("../questions/Perguntas.json")));

    $id = $_GET['pergunta'] - 1;

    if (isset($_POST['escolha'])) {
        $escolha = $_POST['escolha'];
    }

    if (isset($_POST['resposta'])) {
        $resposta = $_POST['resposta'];
    }

    if($numPerguntas == $id){
        header("Location: Win.php");
    }

    if (isset($_POST['escolha']) && isset($_POST['resposta'])) {
        if($escolha != $resposta){
            header("Location: Lose.php");
        }
    }

    $questao = load_question($id,"../questions/Perguntas.json");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MainPage.css">
    <title>Show do Milhão</title>
</head>

<body>

    <h1>Pergunta <?= $id + 1?></h1>
    <h2><?= $questao->question ?></h2>

    <form action="Game.php?pergunta=<?php echo $_GET['pergunta']+1?>" method="post">
    <input hidden name="resposta" value=<?=$questao->answer?>>

    <?php 
    for ($i=1; $i <= sizeof($questao->options); $i++) { 
        echo "<div><input type='radio' id='{$i}' name='escolha' value='{$i}' required><label for='{$i}'>{$questao->options[$i-1]}</label></div>";
    }
    ?>

    <input type="submit" value="Enviar">

</form>
    
</body>
</html>