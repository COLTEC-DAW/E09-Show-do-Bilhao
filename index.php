 <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="style.css">

    <body>
        <?php
            require('pergunta.inc.php');
            require('definirPerguntas.inc.php');
            require('paginaResultado.inc.php');

            $idPagina = intval($_GET["id"]);
            $numPerguntas = 5;      
            $_SESSION['numPerguntas'] = $numPerguntas;

            function carregaResultado () {
                global $perguntas;
                global $idPagina;

                if ($perguntas[$idPagina]->checarResposta()) {
                    respostaCorreta($idPagina);
                }
                else {
                    $respostaCorreta = $perguntas[$idPagina]->respostaCorreta;
                    $stringRespostaCorreta = $perguntas[$idPagina]->respostas[$respostaCorreta];
                    
                    respostaErrada($idPagina, $respostaCorreta, $stringRespostaCorreta);
                }
            }

            if(isset($_POST['submeter'])){
                carregaResultado();
            }
            else {
                carregaPergunta($perguntas, $idPagina);
            }

            if (isset($_SESSION['loginAtual'])) {

            }
        ?>
    </body>
</html>