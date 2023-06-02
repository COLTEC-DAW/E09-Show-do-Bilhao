<?php
    require "Dados/question.inc";
    $marked = htmlspecialchars($_POST["marked"]);
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
<?php
$question = load_question($,"perguntas.json");
?>
<h2><?= $question->question ?></h2>

<form action="loadQuestion.php" method="post">
    <?php 
    for ($i=0; $i < sizeof($question->options); $i++) { 

        echo "<div><input type='radio' id='{$i}' name='alternativa' value='{$i}'><label for='{$i}'>{$question->options[$i]}</label></div>";
          
    }
    ?>
    <br>
            <input type="submit" value="Enviar">
</form>
    
</body>
</html>