<?php
    require 'src/perguntas.inc';
    include 'src/rodape.inc';
    include "src/menu.inc";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Show do Bilhão</title>
</head>
<body>
    <?php echo exibeMenu(); ?>
    <h1>Show do Bilhao</h1>
    <p> O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo. </p>
    
    <?php echo exibeRodape(); ?>

</body>
</html>