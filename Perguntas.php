<?php
    require "question.inc.php";
    define("NUMERO_PERGUNTAS", 4);

    if($questao->answer == $_POST['alternativa'])
    {
        $acertos = $_POST['pergunta'] + 1;
        setcookie($acertos, $acertos);
        if($_POST['pergunta'] == NUMERO_PERGUNTAS)
        {
            echo 'ganhou';
            exit(1);
        }
        $questao = load_question($_POST['pergunta'] + 1, "perguntas.json");
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
<input hidden name="pergunta" value=<?=$_POST["pergunta"] + 1?>>
    <?php 
    for ($i=0; $i < sizeof($questao->options); $i++) { 

        echo "<div><input type='radio' id='{$i}' name='alter' value='{$i}'><label for='{$i}'>{$questao->options[$i]}</label></div>";
    }
    ?>
        <input type="submit" value="Enviar">

</form>
    
</body>
</html>