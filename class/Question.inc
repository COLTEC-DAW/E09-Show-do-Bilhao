<?php

class Question
{

    public static function carregaPergunta($questionId)
    {
        $pergunta = (array) json_decode(file_get_contents(__DIR__ . "/../data/perguntas.json"))[$questionId];
        return new Question($pergunta["enunciado"], $pergunta["alternativas"], $pergunta["resposta"]);
    }

    public static function getCountPerguntas()
    {
        $perguntas = (array) json_decode(file_get_contents(__DIR__ . "/../data/perguntas.json"));
        return sizeof($perguntas);
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