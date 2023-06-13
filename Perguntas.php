<?php
    require "question.inc";
    $id = $_POST['pergunta'];
    $escolha = $_POST['escolha'];
    $resposta = $_POST['resposta'];

    if($escolha == $resposta){
        $questao = load_question($id,"perguntas.json");
    }else{
        echo 'perdeu';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h2><?= $questao->question ?></h2>

<form action="Perguntas.php" method="post">
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