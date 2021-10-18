<!DOCTYPE html>

<?php 
require_once "perguntas.inc";

global $idPergunta;

$GLOBALS['idPergunta'] = $_POST['idPergunta'] ?? ($_GET['idPergunta'] ?? 0);
if (isset($_POST['resposta']))
{
    if (Perguntas::CheckResposta($GLOBALS['idPergunta'], $_POST['resposta']))
    {
        $GLOBALS['question'] = "RIGHT_ANSWER";
        $GLOBALS['idPergunta']++;
    }
    else
    {
        $GLOBALS['question'] = "WRONG_ANSWER";
    }
}

?>

<html>
    <head>
        <title>Pergunta</title>
    </head>
    <body>
        <?php
        if (($GLOBALS['question'] ?? null) == "WRONG_ANSWER")
        {
            include_once "gameoverlose.inc";
        }
        elseif ($GLOBALS['idPergunta'] == Perguntas::GetNumPerguntas())
        {
            include_once "gameoverwin.inc";
        }
        else
        {
            $textoEnunciado = Perguntas::GetEnunciado($idPergunta);
            ?>

            <div class="pergunta">
            
                <h2 class="enunciado"><?php echo "$textoEnunciado" ?></h2>

                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="question">
                    <input type="hidden" name="idPergunta" value="<?php echo "$idPergunta" ?>">

                    <?php
                    for ($idAlternativa = 0; $idAlternativa < Perguntas::GetNumAlternativas($GLOBALS['idPergunta']); $idAlternativa++)
                    {
                        $textoAlternativa = Perguntas::GetAlternativa($GLOBALS['idPergunta'], $idAlternativa);
                        ?>
                        <p class="alternativa">
                            <input type="radio" name="resposta" id="<?php echo "Alternativa$idAlternativa" ?>" value="<?php echo "$idAlternativa" ?>" onclick="enableSubmit()">
                            <label for="<?php echo "Alternativa$idAlternativa" ?>"><?php echo "$textoAlternativa" ?></label>
                        </p>
                        <?php
                    }?>
                    <input type="submit" id="enviaResposta" value="Com minha conta em risco, reposta final." disabled>
                </form>
            </div>
            <?php
        }?>
        

        <div class="progresso">
            <h3>
                <?php
                $numPerguntas = Perguntas::GetNumPerguntas();
                $numRespostasCorretas = $idPergunta; 
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
