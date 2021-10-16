<!DOCTYPE html>

<?php 

require_once "perguntas.inc";

global $vetorEnunciados;
global $matrizAlternativas;
global $vetorAlternativasCorretas;

$idPerguntaAtual = $_POST['id'] ?? ($_GET['id'] ?? 0);
$idAntePergunta = $idPerguntaAtual - 1;
$idProxPergunta = $idPerguntaAtual + 1;
$isRespostaCorreta = isset($_POST['resposta']) ? ($_POST['resposta'] == GetPerguntaAlternativasCorretaId($idAntePergunta)) : true;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>O SHOW DO BILHAO</title>
    </head>
    <body>
        <?php
        if ($idPerguntaAtual == NUM_PERGUNTAS and $isRespostaCorreta)
        {
            include "gameoverwin.inc";
        }
        elseif ($idPerguntaAtual == 0 or $isRespostaCorreta)
        {
            $pergunta = GetPergunta($idPerguntaAtual);

            $textoEnunciado = $pergunta[0];
            $alternativas = $pergunta[1];
            ?>

            <div class="pergunta">
                <h2 class="enunciado"><?php echo "$textoEnunciado" ?></h2>
                <form action="perguntas.php" method="post">
                    <?php
                    for ($idAlternativa = 0; $idAlternativa < NUM_ALTERNATIVAS; $idAlternativa++)
                    {
                        $textoAlternativa = $alternativas[$idAlternativa];
                        ?>
                        
                        <p class="alternativa">
                            <input type="radio" name="resposta" id="<?php echo "$idAlternativa" ?>" value="<?php echo "$idAlternativa" ?>" onclick="enableSubmit()">
                            <input type="hidden" name="id" value="<?php echo "$idProxPergunta" ?>">
                            <label for="<?php echo "$idAlternativa" ?>"><?php echo "$textoAlternativa" ?></label>
                        </p>
                        <?php
                    }
                    ?>
                    <input type="submit" id="enviaResposta" value="Com minha conta em risco, reposta final." disabled>
                </form>
            </div>
            <?php
        }
        else
        {
            include "gameoverlose.inc";
        }
        ?>

        <div class="progresso">
            <h3>
                <?php
                $numPerguntas = NUM_PERGUNTAS;
                $numRespostasCorretas = $isRespostaCorreta ? $idPerguntaAtual : $idPerguntaAtual - 1; 
                echo "$numRespostasCorretas de $numPerguntas perguntas respondidas corretamente.";
                ?>
            </h3>
        </div>
        <script>
            function enableSubmit() {
                document.getElementById("enviaResposta").removeAttribute("disabled");
            }
        </script>
    </body>
</html>
