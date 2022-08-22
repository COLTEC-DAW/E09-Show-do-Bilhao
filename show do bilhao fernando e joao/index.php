<?php 

    $questoes = array("Em qual estado nasceu o criador do primeiro avião:",
                    "Qual o ano da proclamação da republica:",
                    "Quem descobriu o Brasil:",
                    "Em que ano foi a abolição da escravidão:",
                    "Em qual ano o Brasil conquistou a primeira Copa do Mundo:");

    $opcoes = array(array("SP","MG","SC","PA"),
                          array("1889","1885","1890","1887"),
                          array("Pedro A. Cabral","Cristóvão Colombo","Indígenas","Dom Pedro I"),
                          array("1885","1889","1888","1890"),
                          array("1954","1950","1962","1958"),);

    $respostas = array("b","a","a","c","d");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Show do Bilhão</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include("partials/menu.inc");    
        ?>
        <?php
            include("partials/questoes.inc");
            carregaQuestao($_GET['id'], $questoes, $opcoes);
        ?>
        <?php
            include("partials/rodape.inc");
        ?>
        
    </body>
</html>