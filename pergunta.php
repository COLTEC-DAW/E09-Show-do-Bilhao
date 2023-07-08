<?php
class Pergunta
{
    public $enunciado;
    public $alternativas;
    public $resposta;
    public $id_question;

    public function __construct(array $pergunta)
    {
        $this->id_question = $pergunta['id'];
        $this->enunciado = $pergunta['enunciado'];
        $this->alternativas = $pergunta['alternativas'];
        $this->resposta = $pergunta['resposta'];
    }

}

?>