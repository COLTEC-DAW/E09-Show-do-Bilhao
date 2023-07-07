<?php 
    class Pergunta
    {
        var $enunciado;
        var $alternativas;
        var $resposta;

        public function __construct($enun, $alts, $resp)
        {
            $this->enunciado = $enun;
            $this->alternativas = [];
            $this->resposta = $resp;

            foreach ($alts as $value) 
            { 
                $this->alternativas[] = $value; 
            }
        }
    }
    function carregaPergunta($id) 
    {
        $arqJSON = file_get_contents("perguntas.json");
        $perguntas = json_decode($arqJSON);

        $pergunta = new Pergunta
        (
            $perguntas[$id]->enunciado,
            $perguntas[$id]->alternativas,
            $perguntas[$id]->resposta
        );
        return $pergunta;
    }
?>