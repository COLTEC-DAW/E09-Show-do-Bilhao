<?php
    function respostaCorreta(int $idPagina, int $idRespostaCorreta, string $stringRespostaCorreta) {
        $idRespostaCorreta++; 
        // Os IDs começam no 0, mas é mais intuitivo pro usuário apresentá-los como se começassem no 1

        echo("<h1>Resposta correta!</h1>");
        echo("Resposta correta: $stringRespostaCorreta (alternativa $idRespostaCorreta)");
    }

    function respostaErrada(int $idPagina, int $idRespostaCorreta, string $stringRespostaCorreta) {
        $idRespostaCorreta++;
        // Os IDs começam no 0, mas é mais intuitivo pro usuário apresentá-los como se começassem no 1

        echo("<h1>Resposta errada!</h1>");
        echo("Resposta correta: $stringRespostaCorreta (alternativa $idRespostaCorreta)");
    }
?>