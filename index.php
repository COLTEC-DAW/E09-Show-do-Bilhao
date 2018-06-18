<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $enunciados=array(
        "Qual a cidade mais populosa da India?",
        "Qual a capital do Canadá?",
        "Qual planeta pertencente ao sistema solar está mais distante do Sol?",
        "Qual o nome do mascote do Brasil na Copa do Mundo FIFA de 2018?",
        "Constantinopla, que se localizava onde hoje está Istambul, foi conquistada em 1453 por qual império?"
    );

    $alternativas=array(
        array(
            "Bangladexe",
            "Deli",
            "Bombaim",
            "Nova Deli"
        ),
        array(
            "Toronto",
            "Ottawa",
            "Montreal",
            "Vancouver"
        ),
        array(
            "Netuno",
            "Urano",
            "Mercúrio",
            "Saturno"
        ),
        array(
            "Canarinho",
            "Fuleco",
            "Arara Blue",
            "Canarinho PistolaaA%"
        ),
        array(
            "Império Macedônico",
            "Império Otomano",
            "Império Britânico",
            "Império Romano"
        )
    );
    $respostas=array(3,2,1,4,2);


    foreach($enunciados as $atual){
        echo '<p>'.$atual.'</p>';
    }
     
    ?> 
</body>
</html>