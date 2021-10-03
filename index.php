<?php
    $perguntas = array('Quais são as fases da Lua? <br/>', 
                        'Qual a montanha mais alta do mundo? <br/>', 
                        'Onde se localiza Machu Picchu? <br/>',
                        'Que país tem o formato de uma bota? <br/>',
                        'Quantos ossos temos no nosso corpo? <br/>');

    $opcoes = array(('a) Nova, cheia e superlua <br/>
                        b) Penumbral, lunar parcial, lunar total e cheia <br/>
                        c) Nova, cheia, minguante e lua de sangue <br/>
                        d) Nova, crescente, cheia e minguante <br/> <br/>'),
                        ('a) Mauna Kea <br/>
                        b) Dhaulagiri <br/>
                        c) Monte Chimborazo <br/>
                        d) Monte Everest <br/> <br/>'),
                        ('a) Colômbia <br/>
                        b) Peru <br/>
                        c) Bolívia <br/>
                        d) Índia <br/> <br/>'),
                        ('a) Itália <br/>
                        b) Brasil <br/>
                        c) Portugal <br/>
                        d) México <br/> <br/>'),
                        ('a) 126 <br/>
                        b) 100 <br/>
                        c) 206 <br/>
                        d) 300 <br/> <br/>'));

    $respostas = array(3, 3, 1, 0, 2);
    
    function mostrarQuestoes(){
        global $perguntas;
        global $opcoes;

        for($index = 0; $index <= 4; $index++){
            echo($perguntas[$index]);
            echo("<br/>");
            
            echo($opcoes[$index]);
            echo("<br/>");
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Show do Bilhão</title>
</head>
<body>
    <div id="cabecalho">
        <h1 id="titulo">Bem vindo ao Show do Bilhão</h1>
    </div>

    <div>
        <p id="questoes">
            <?php echo mostrarQuestoes() ?>
        </p>
    </div>
    
</body>
</html>