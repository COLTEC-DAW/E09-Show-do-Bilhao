<?php

class Question
{
    public static function genRandomQuestion()
    {
        $perguntas = (array) json_decode(file_get_contents(__DIR__ . "/../data/perguntas.json"));
        $pergunta = (array) $perguntas[array_rand($perguntas, 1)];
        return new Question($pergunta["enunciado"], $pergunta["alternativas"], $pergunta["resposta"]);
    }

    public static function carregaPergunta($questionId)
    {
        $pergunta = (array) json_decode(file_get_contents(__DIR__ . "/../data/perguntas.json"))[$questionId];
        return new Question($pergunta["enunciado"], $pergunta["alternativas"], $pergunta["resposta"]);
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

// echo json_encode(Question::carregaPergunta(4));

?>