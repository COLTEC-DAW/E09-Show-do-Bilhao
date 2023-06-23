 <!DOCTYPE html>
    <html>
    <link rel="stylesheet" href="style.css">

    <body>
        <?php
            require('pergunta.inc.php');
            require('definirPerguntas.inc.php');
            require('paginaResultado.inc.php');

            $idPagina = intval($_GET["id"]);

            if(isset($_POST['submeter'])){
                $respostaCorretaAtual = $perguntas[$idPagina]->respostaCorreta;
                $stringRespostaCorretaAtual = $perguntas[$idPagina]->respostas[$respostaCorretaAtual];

                if(isset($_POST['respostaCerta'])){
                    $perguntas[$idPagina]->checarResposta($_POST['respostaCerta']);
                }
                if (isset($_POST['correto'])) {
                    respostaCorreta($idPagina, $respostaCorretaAtual, $stringRespostaCorretaAtual);
                }
                else {
                    respostaErrada($idPagina, $respostaCorretaAtual, $stringRespostaCorretaAtual);
                }
            }
            else {
                carregaPergunta($perguntas, $idPagina);
            }
        ?>
    </body>
</html>