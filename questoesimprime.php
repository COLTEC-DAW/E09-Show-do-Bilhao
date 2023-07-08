<?php class Perguntas {
        public $pergunta;
        public $opcoes;
        public $resposta;

        function __construct($pergunta , $opcoes , $resposta)
        {
            $this->pergunta = $pergunta;
            $this->opcoes = $opcoes;
            $this->resposta = $resposta;
        }
    }

    function carregaPergunta($id){
        $perguntas = file_get_contents("perguntas.json");
        $perguntasdecode = json_decode($perguntas , true);

        $pergunta = new Perguntas ($perguntasdecode[$id]["pergunta"] , $perguntasdecode[$id]["opcoes"] , $perguntasdecode[$id]["resposta"]); 

        return $pergunta;
    }

    function confereResposta($id , $alternativa)
    {
        $perguntas = file_get_contents("perguntas.json");
        $perguntasdecode = json_decode($perguntas , true);

        if ($perguntasdecode[$id]["resposta"] == $alternativa) {
            return true;
        }else {
            return false;
        }
    }
?>