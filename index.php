<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'menu.inc';
            require 'dados.inc';

            global $perguntas, $alternativas, $respostas, $alt;
            $perguntas = array( "Como se chama o lago salgado, que é parte mais baixa da Terra, situado na Palestina?",
                                "Qual o continente que tem mais países?",
                                "A planície da Manchúria encontra-se em qual país?",
                                "Na fronteira de quais países está o Everest, pico mais alto do mundo?",
                                "O abacaxi é originário de que país?");
            $alternativas = array(
                array("Mar Morto", "Mar Cáspio", "Mar Mediterrâneo", "Mar do Caribe"),
                array("Europa", "África", "Ásia", "América"),
                array("China", "Mongólia", "Irã", "Angola"),
                array("Suíça e Itália", "Nepal e China", "Chile e Argentina", "Brasil e Uruguai"),
                array("Estados Unidos", "Brasil", "Colômbia", "Venezuela")
            );
            $respostas = array(0, 1, 0, 1, 1);
            $alt = array("a)", "b)", "c)", "d)");

            $id_pergunta = $_GET["id"];
            pergunta($id_pergunta);
        ?>
    </body>
</html>