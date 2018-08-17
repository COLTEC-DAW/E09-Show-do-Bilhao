<?php
    require '../models/dao/questoesDAO.php';
    class Questoes {
        function verificaResposta($id_perg, $resp) {
            $resp_correta = QuestoesDAO::getResposta($id_perg);
            return $resp == $resp_correta;
        }
    }
?>