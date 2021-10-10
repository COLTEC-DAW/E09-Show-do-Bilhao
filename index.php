<?php
    include "Info\data.inc";
    include "Info\menu.inc";
    include "Info\Rodape.inc";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title> 
    <link rel="stylesheet" href="./style.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>

<body>
    <?php echo Menu()?>
    <div id="Superior">
        <h1 id="Titulo">Show do Bilhão </h1>
        <h2>Edição Marvel</h2>
        <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo.</p>
        
    </div>
    <?php echo Rodape()?>
</body>

</html> 