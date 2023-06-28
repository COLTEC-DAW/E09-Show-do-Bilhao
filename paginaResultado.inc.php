<?php
    function respostaCorreta(int $idPagina) {
        echo("<h1>Resposta correta!</h1>");
        echo("<a href='index.php?id=0'>Reiniciar jogo</a>");

        if($idPagina < $_SESSION['numPerguntas'] - 1) {
            echo("</br></br><a href='index.php?id=" . $idPagina+1 . "'>Próxima pergunta ===></a>");
        }
    }

    function respostaErrada(int $idPagina, int $idRespostaCorreta, string $stringRespostaCorreta) {
        $idRespostaCorreta++;
        // Os IDs começam no 0, mas é mais intuitivo pro usuário apresentá-los como se começassem no 1

        echo("<h1>Resposta errada!</h1>");
        echo("Resposta correta: $stringRespostaCorreta (alternativa $idRespostaCorreta)");
        echo("</br><a href='index.php?id=0'>Reiniciar jogo</a>");
    }
?>