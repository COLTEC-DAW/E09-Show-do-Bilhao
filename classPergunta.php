<?php

class Question{


    private $enunciado;
    private $alternativas = array();
    private $option;

    public function __construct($question, $alternativas, $option){


        $this->enunciado = $question;
        $this->alternativas = $alternativas;
        $this->resposta = $option;

    }

    public function getPergunta()
    {
        return $this->enunciado;
    }

    public function getAlternativas()
    {
        return $this->alternativas;
    }

    public function getResposta()
    {
        return $this->resposta;
    }

    static function loadQuestion($id)
    {

        $jsonF = file_get_contents("questionsFile.json");
        $jsonDecod = json_decode($jsonF, true);

        if (!(is_numeric($id)) || $id == "-1" || $id >= count($jsonDecod["perguntas"])) {
            return false;
        }

        $pergunta = new Question(
            $jsonDecod["perguntas"][$id]["enunciado"],
            $jsonDecod["perguntas"][$id]["alternativas"],
            $jsonDecod["perguntas"][$id]["resposta"],
        );

        return $pergunta;
    }


}

?>