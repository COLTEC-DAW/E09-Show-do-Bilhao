<?php
    class Perguntas{
        public $id; 
        public $enuncuado; 
        public $alternativas; 
        public $resposta_correta;

        function __construct($id){
            global $perguntas;

            $this->id=$id;
            $this->enunciado=$perguntas[$id]['enunciado'];
            $this->alternativas=$perguntas[$id]['alternativas'];
            $this->resposta_correta=$perguntas[$id]['respostas'];
        }
    }

    $file = $_SERVER['DOCUMENT_ROOT'] . '/models/perguntas.json';
    $perguntasJson = file_get_contents($file);
    $perguntas = json_decode($perguntasJson, true);
?>