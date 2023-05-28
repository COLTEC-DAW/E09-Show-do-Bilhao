<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta</title>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
    </style>
</head>
<body>
    <?php require "perguntas.inc";?>
    <?php 
        $id=$_GET["id"];
        $idPergunta=$id+1;
        echo "<h1>Pergunta $idPergunta </h1>";
        $pergunta=carregaPerguntas($id);
    ?>
    <h2><?php echo "$pergunta->enunciado"?></h2>
    
    <form action="processaPergunta.php" method="post">
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
</html>