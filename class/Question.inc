<?php
class Question
{
    // Properties
    public $enunciado;
    public $alternativas;
    public $alternativa_correta;

    // Constructor

    function __construct($enunciado, $alternativas, $alternativa_correta)
    {
        $this->enunciado = $enunciado;
        $this->alternativas = $alternativas;
        $this->alternativa_correta = $alternativa_correta;
    }
}
?>