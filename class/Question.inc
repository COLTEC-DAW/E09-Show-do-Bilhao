<?php
    
class Question
{
    public static function genRandomQuestion()
    {
        $perguntas = json_decode(file_get_contents(__DIR__ . "/../data/perguntas.json"));
        return $perguntas[array_rand($perguntas, 1)];
    }


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