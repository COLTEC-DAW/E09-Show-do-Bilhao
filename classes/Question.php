<?php
class Question
{
    private $enunciado;
    private $alternativas;
    private $resposta;

    public function __construct($enunciado, $alternativas, $resposta)
    {
        $this->enunciado = $enunciado;
        $this->alternativas = $alternativas;
        $this->resposta = $resposta;
    }

    public function getEnunciado()
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

    public static function carregaPergunta($id)
    {
        $strJson = file_get_contents("./jsons/perguntas.json");
        $decodedJson = json_decode($strJson, true);

        $pergunta = new Question(
            $decodedJson[$id]["enunciado"],
            $decodedJson[$id]["alternativas"],
            $decodedJson[$id]["resposta"]
        );
        return $pergunta;
    }

    public function verificaResposta($alternativa)
    {
        $resposta = $this->resposta;
        return ($alternativa == $resposta);
    }
}
