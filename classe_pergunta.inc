<?php

/* NAO UTILIZE ESSA CLASSE: USE 'Gerenciador_de_Pergunta' */
class Pergunta
{
    public $enunciado;
    public $alternativas;
    public $resposta_correta;

    public function __construct($enun, $alter, $res)
    {
        $this->enunciado        = $enun;
        $this->alternativas     = $alter;
        $this->resposta_correta = $res;
    }
}

class Gerenciador_de_Pergunta
{
    private $pergunta;
    
    public function __construct($enun = 'Como vc esta?', $alter = [ "bem", "estou bem", "bem, e vc?", "estou otimo, obrigado! E voce?", "nao muito..." ], $res = 3)
    {
        $this->pergunta = new Pergunta($enun, $alter, $res);
    }

    public function obter_enunciado()
    {
	    return $this->pergunta->enunciado;
    }

    public function obter_alternativas()
    {
	    return $this->pergunta->alternativas;
    }

    public function obter_res_correta()
    {
	    return $this->pergunta->resposta_correta;
    }

    public function toJSON()
    {
        return json_encode($this->pergunta);
    }

    public function setFromJSON($textJSON)
    {
        $this->pergunta	= json_decode($textJSON);
    }

    public function eh_res_correta($alternativa)
    {
        return $alternativa === $this->pergunta->alternativas[$this->pergunta->resposta_correta];
    }
}

?>
