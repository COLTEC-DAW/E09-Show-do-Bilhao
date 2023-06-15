
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

$gab = ["A", "B", "C", "D"];
$resp_usuario = $gab[$_POST["alt"]];


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

        <?php 
        if($id != 0 && $resp_usuario != retornaGabarito()[$id-1]){
            
            include "game-over.inc";

            echo "X".$resp_usuario;
            echo "X".retornaGabarito()[$id-1];
            echo $id;

        }else{

            include "questoes.inc";

            echo "X".$resp_usuario;
            echo "X".retornaGabarito()[$id-1];
            echo $id;



        } ?>

        <?php include "rodape.inc"?>
    </body>

</html>