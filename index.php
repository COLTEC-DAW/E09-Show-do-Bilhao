<?php 
    session_start();
?>
 
 <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="style.css">

    <body>
        <?php
            require('usuario.inc');
            require('pergunta.inc.php');
            require('paginaResultado.inc.php');

            include('header.inc');

            $idPagina = intval($_GET["id"]);
            $numPerguntas = 5;      
            $_SESSION['numPerguntas'] = $numPerguntas;

            function carregaResultado () {
                global $perguntas;
                global $idPagina;

                if ($perguntas[$idPagina]->checarResposta()) {
                    $usuarioAtual = $_SESSION['loginAtual'];

                    // $usuarioAtual->atualizaPontuacaoMaxima($idPagina+1); 
                    atualizaPontuacaoMaxima($usuarioAtual, $idPagina+1);  
                    atualizaCookieUsuario();
                    respostaCorreta($idPagina);
                }
                else {
                    $respostaCorreta = $perguntas[$idPagina]->respostaCorreta;
                    $stringRespostaCorreta = $perguntas[$idPagina]->respostas[$respostaCorreta];
                    
                    respostaErrada($idPagina, $respostaCorreta, $stringRespostaCorreta);
                }
            }

            function getPerguntas() {
                $arquivoPerguntas = fopen("perguntas.json", "r+");
                $arrayPerguntas = json_decode(fread($arquivoPerguntas, filesize("perguntas.json")));
                fclose($arquivoPerguntas);

                return $arrayPerguntas;
            }

            if (isset($_SESSION['loginAtual'])) {
                $perguntas = inicializaPerguntas(getPerguntas());

                if(isset($_POST['submeter'])) {
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