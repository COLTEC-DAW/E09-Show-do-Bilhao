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
    <div class="pergunta">
        <div class="enunciado">
            <div class="perguntaInfo">
                <h1>Pergunta <?php echo $pergunta->id+1?></h1>
                <p>Acertos: <?php echo "$pontuacao/5" ?></p>
            </div>
            <h2><?php echo "$pergunta->enunciado"?></h2>
        </div>
        <form action="/Pages/Perguntas.php" method="post" >
            <div class="alternativas">
            <?php
        for($i=0;$i<count($pergunta->alternativas);$i++){
            echo "<input type='radio' class ='alternativaItem' name='opcao' value=$i>";
            echo "<label>".$pergunta->alternativas[$i]."</label>";
        }
        ?>
        </div>
        <input type='hidden' name="pergunta" value="<?php echo $pergunta->id?>"/>
        <input type='hidden' name="pontuacao" value="<?php echo $pontuacao?>"/>
        <button type= "submit">Enviar resposta</button>
    </form>
</div>
<?php
require "../Componentes/rodape.inc";
?>
</body>