<!DOCTYPE html>

<?php
require_once "perguntas.inc";
if (session_status() != 2) {

    session_start();
}

global $idPergunta;

$idPergunta = $_POST['idPergunta'] ?? ($_GET['idPergunta'] ?? 0);

if (isset($_POST['resposta'])) {
    if (Perguntas::CheckResposta($idPergunta, $_POST['resposta'])) {
        $correctAnswer = true;
        $idPergunta++;
        $_SESSION['highscore'] = (($_SESSION['highscore'] ?? 0) + ($idPergunta <= ($_SESSION['highscore'] ?? 0) ? 0 : 1));
    } else {
        $correctAnswer = false;
    }
}
?>

<html>

    <head>
        <title>Pergunta</title>
    </head>

    <body>
        <?php
    if (!($correctAnswer ?? true)) {
        include_once "gameoverlose.inc";
    } elseif ($idPergunta == Perguntas::GetNumPerguntas()) {
        include_once "gameoverwin.inc";
    } else {
        $textoEnunciado = Perguntas::GetEnunciado($idPergunta);
    ?>
        <div class="pergunta">

            <h2 class="enunciado"><?php echo "$textoEnunciado" ?></h2>

            <form action="index.php" method="post">
                <input type="hidden" name="action" value="question">
                <input type="hidden" name="idPergunta" value="<?php echo "$idPergunta" ?>">

                <?php
                for ($idAlternativa = 0; $idAlternativa < Perguntas::GetNumAlternativas($idPergunta); $idAlternativa++) {
                    $textoAlternativa = Perguntas::GetAlternativa($idPergunta, $idAlternativa);
                ?>
                <p class="alternativa">
                    <input type="radio" name="resposta" id="<?php echo "Alternativa$idAlternativa" ?>"
                        value="<?php echo "$idAlternativa" ?>" onclick="enableSubmit()">
                    <label for="<?php echo "Alternativa$idAlternativa" ?>"><?php echo "$textoAlternativa" ?></label>
                </p>
                <?php
                }
                ?>
                <input type="submit" id="enviaResposta" value="Com minha conta em risco, reposta final." disabled>
            </form>
        </div>
        <?php
    } ?>

        <div class="progresso">
            <h3>
                <?php
            $numPerguntas = Perguntas::GetNumPerguntas();
            $numRespostasCorretas = $idPergunta;
            echo "$numRespostasCorretas de $numPerguntas perguntas respondidas corretamente.";
            ?>
            </h3>
            <p>
                <?php
            $highscore = $_SESSION['highscore'] ?? false;
            if ($highscore) {
                echo "Seu recorde atual é: $highscore";
            }
            ?>
            </p>
        </div>
        <script>
        function enableSubmit() {
            document.getElementById("enviaResposta").removeAttribute("disabled");
        }
        </script>
    </body>

</html>