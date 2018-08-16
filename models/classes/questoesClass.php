<?php
    class Questoes {
        function verificaResposta($id_perg, $resp) {
            $resp_correta = QuestoesDAO::getResposta($id_perg);
            return strcmp($resp, $resp_correta);
        }
    }
?>