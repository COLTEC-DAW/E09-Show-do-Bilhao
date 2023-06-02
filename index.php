
<?php
require "perguntas.inc";

if(count($_GET) == 0){
    $id = 0;
}else{
    $id = $_GET['id'];
}


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
        <title>Pergunta <?php echo ($id + 1) ?> - Show dos Otakus</title>

        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include "menu.inc"?>

        <main>
            <form class="questao" action="index.php?id=<?php echo $id + 1; ?>" method="POST">
                <h2 class="enunciado"> <?php echo $pergunta ?> </h2>

                <div class="alternativas">
                    <?php foreach($alt as $index => $alternativa){ ?>
                    
                    <div class="alter">
                        <input type='radio' name='alt' id='alt-<?php echo $index ?>' value="<?php echo $index ?>">
                        <label for='alt-<?php echo $index ?>'> <?php echo $alternativa ?> </label><br>
                    </div>

                    <?php } ?>

                </div>
                
                <input type="submit" value="Enviar">
                
            </form>

            
        </main>

        <?php include "rodape.inc"?>
    </body>

</html>