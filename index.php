
<?php
include "perguntas.inc";

$id = $_GET['id'] - 1;

$dadosPergunta = carregaPergunta($id);

$pergunta = $dadosPergunta[0];
$alt = $dadosPergunta[1];
$resposta = $dadosPergunta[2];

?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pergunta <?php echo ($id + 1) ?> - Show do Bilhão</title>
    </head>

    <body>
        <?php include "menu.inc"?>

        <main>
            <div class="questao">
                <h2 class="enunciado"> <?php echo $pergunta ?> </h2>
                <?php
                foreach($alt as $index => $alternativa){

                    echo "<input type='radio' name='alt' id='alt-$index'>
                    <label for='alt-$index'> $alternativa </label><br>";

                }
                ?>
                

            </div>
            
        </main>

        <?php include "rodape.inc"?>
    </body>

</html>