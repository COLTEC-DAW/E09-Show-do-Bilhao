<?php 
    class Pergunta{
        var $enunciado;
        var $alternativas;
        var $resposta;
        public function __construct($pergunta, $opcoes, $answer){
            $this->enunciado = $pergunta;
            $this->alternativas = [];
            $this->resposta = $answer;
            foreach ($opcoes as $comparador) {
                $this->alternativas[] = $comparador;
            }
        }
    }
    function mudaPergunta($id) {
        $perguntasJson = file_get_contents("questions.json");
        $pergunta = json_decode($perguntasJson);
        $pergunta = new Pergunta(
            $pergunta[$id]->enunciado,
            $pergunta[$id]->alternativas,
            $pergunta[$id]->resposta
        );
        return $pergunta;
    }
?>