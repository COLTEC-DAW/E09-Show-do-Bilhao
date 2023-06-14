<?php
    require "AloadQuestion.inc";

    $file = json_decode(file_get_contents("APerguntas.json"));
    $numPerguntas = count($file);

    $id = $_POST['pergunta'];

    if (isset($_POST['escolha'])) {
        $escolha = $_POST['escolha'];
    }

    if (isset($_POST['resposta'])) {
        $resposta = $_POST['resposta'];
    }

    if($numPerguntas == $id){
        header("Location: BGanhou.php");
    }
    if($escolha == $resposta){
        $questao = load_question($id,"APerguntas.json");
    }else{
        header("Location: BPerdeu.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Firula/MainPage.css">
    <title>Document</title>
</head>

<body>
    <h1>Pergunta <?= $id + 1?></h1>
<h2><?= $questao->question ?></h2>

<form action="BJogo.php" method="post">
<input hidden name="pergunta" value=<?=$id + 1?>>
<input hidden name="resposta" value=<?=$questao->answer?>>
    <?php 
    for ($i=1; $i <= sizeof($questao->options); $i++) { 

        echo "<div><input type='radio' id='{$i}' name='escolha' value='{$i}'><label for='{$i}'>{$questao->options[$i-1]}</label></div>";
    }
    ?>
        <input type="submit" value="Enviar">

</form>
    
</body>
</html>