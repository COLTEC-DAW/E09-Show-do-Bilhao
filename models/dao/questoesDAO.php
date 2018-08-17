<?php
    class QuestoesDAO {
        private static $path = '../data/questoes.json';

        public static function getPergunta($id) {
            $perguntas = QuestoesDAO::getData()->{'perguntas'};
            $perg = $perguntas[$id];
            return $perg;
        }

        public static function getOpcoes($id) {
            $opcoes = QuestoesDAO::getData()->{'alternativas'}[$id];
            return $opcoes;
        }

        public static function getResposta($id) {
            $resposta = QuestoesDAO::getData()->{'respostas'}[$id];
            return $resposta;
        }

        private static function getData() {
            $json = file_get_contents(QuestoesDAO::$path);
            $data = json_decode($json);
            return $data;
        }
    }
?>