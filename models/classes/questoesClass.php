<?php
    class Questoes {

        public function verificaResposta($id_perg, $resp) {
            $resp_correta = Questoes::getDAO()->getResposta($id_perg);
            return $resp == $resp_correta;
        }

        private static function getDAO() {
            return new QuestoesDAO();
        }
    }
?>