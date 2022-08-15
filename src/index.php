<?php 
    $perguntas = array("O que começa com 'C', termina com 'E' e te deixa feliz?",
                    "Safe?",
                    "Qual a hora exata do corote?",
                    "Entregar atividade?",
                    "Não deixa o COLTEC morrer, Não deixa o COLTEC acabar. COLTEC é feito de aula, aula pra gente (...)?");

    $alternativas = array(array("Corote","Coiote","Confete","Cotonete"),
                          array("Não ta safe","SAAAAFEE","Ta troll","Táa Ligadoo"),
                          array("10:30","19:00","8:20","15:00"),
                          array("1 semana antes","1 dia antes","Não entregar","Esperar adiar"),
                          array("Matar","Aprender","Dormir","Estudar"),);

    $respostas = array("a","b","c","d","a");
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
            include("partials/perguntas.inc");
            carregaPergunta($_GET['id'], $perguntas, $alternativas);
        ?>
        <?php
            include("partials/rodape.inc");
        ?>
    </body>
</html>