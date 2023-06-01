 <!DOCTYPE html>
    <html>
        <body style="color:white; background-color:black; font-family:'Courier New'">
            <?php
                require('pergunta.inc');
                require('definirPerguntas.inc');

                function printPerguntas(array $perguntas) {
                    foreach($perguntas as $perguntaAtual) {
                        $perguntaAtual->printPergunta();
                    }
                }

                printPerguntas($perguntas);
            ?>
    </body>
</html>