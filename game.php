<?php
include "pergunta.php";
require "perguntas.inc.php";


//identifica id
if (isset($_POST["id"])) {
    $id = $_POST["id"];
} else {
    $id = 0;
}

//Verifica a resposta enviada pelo o form
if (isset($_POST["alt"])) {
    $questao = new Pergunta(carregaPergunta($id));
    if ($_POST["alt"] == $questao->resposta) {
        $id++;
    }else{
        header("Location: gameOver.php");
        exit;
    }   
}

if($id < 0){
    header("Location: gameOver.php");
    exit;
}else if($id > 4){
    header("Location: winner.php");
    exit;
}

setcookie("acertos", $id); //COOKIE que armazena acertos


$q = new Pergunta(carregaPergunta($id)); //Objeto da pergunta atual

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
</head>
    <body>
        
        <?php include "menu.inc"; //inclue menu?>
        <main>
            <form  method="POST" action=game.php id=<?= $id ?>>
                <legend><span><?= $q->id_question?></span><?= $q->enunciado?></legend>

                    <?php 
                    foreach($q->alternativas as $key => $alternativa){
                    ?>

                    <div>
                        <input type="radio" id=<?= "key" . strval($key) ?> name="alt" value=<?=$key ?>>
                        <label for=<?= "key" . strval($key) ?>><?= $alternativa?></label>
                    </div>

                    <?php }?>
                
                <input type='hidden' name='id' value=<?= $id?>>
                <button type="submit">Verificar resposta</button>

            </form>
        </main>

        <?php include "rodape.inc"; //inclue footer?>
    </body>
</html>



