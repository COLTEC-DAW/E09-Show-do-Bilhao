<?php
    class Questoes {

        public function verificaResposta($id_perg, $resp) {
            $resp_correta = Questoes::getDAO()->getResposta($id_perg);
            return $resp == $resp_correta;
        }

        public function carregaPergunta($id) {
            return Questoes::getDAO()->getPergunta($id);
        }

        public function carregaOpcoes($id) {
            $output = "<input type='hidden' name='id' value='$id'>";
            $opt = Questoes::getDAO()->getOpcoes($id);
            for ($i=0; $i < 5; $i++) {
                $check = ($i == 0 ? 'checked' : '');
                $output .= "
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='radio' id='option$i' value='$i' $check>
                    <label class='form-check-label' for='option$i'>
                        $opt[$i]
                    </label>
                </div>";
            }
            return $output;
        }

        private static function getDAO() {
            return new QuestoesDAO();
        }
    }
?>