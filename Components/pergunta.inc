<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Pergunta <?php echo $id+1 ?> </h1>
    <p>Acertos: <?php echo "$id/5" ?></p>
    <h2><?php echo "$pergunta->enunciado"?></h2>
    <form action="perguntas.php" method="post">
        <?php
        for($i=0;$i<count($pergunta->alternativas);$i++){
            echo "<input type='radio' name='opcao' value=$i>";
            echo "<label>".$pergunta->alternativas[$i]."</label>";
        }
        ?>
        <input type='hidden' name="pergunta" value="<?php echo $id?>"/>
        <button type= "submit">Enviar resposta</button>
    </form>
</body>