<?php 
    session_start();
?>
 
 <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="style.css">

    <body>
        <?php
            
            require('pergunta.inc.php');
            require('definirPerguntas.inc.php');
            require('paginaResultado.inc.php');
            require('usuario.inc');

            include('header.inc');

            define("TEMPO_DIA", 60 * 60 * 24);

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

            if (isset($_SESSION['loginAtual'])) {
                if(isset($_POST['submeter'])){
                    carregaResultado();
                }
                else {
                    carregaPergunta($perguntas, $idPagina);
                }
            }
            else {
                header ("Location:login.php");
            }
        ?>
    </body>
</html>