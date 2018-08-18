<?php
    class QuestoesDAO {
        private $data;
        private $path;

        public function __construct() {
            $this->path = $_SERVER['DOCUMENT_ROOT'] . '/data/questoes.json';
            $json = file_get_contents($this->path);
            $this->data = json_decode($json);
        }

        public function getPergunta($id) {
            $perguntas = $this->data->{'perguntas'};
            $perg = $perguntas[$id];
            return $perg;
        }

        public function getOpcoes($id) {
            $opcoes = $this->data->{'alternativas'}[$id];
            return $opcoes;
        }

        public function getResposta($id) {
            $resposta = $this->data->{'respostas'}[$id];
            return $resposta;
        }
    }
?>