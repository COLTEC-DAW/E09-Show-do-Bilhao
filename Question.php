<?php
class Question
{
    private $pergunta;
    private $alternativas;
    private $resposta;
    public function __construct($pergunta, $alternativas, $resposta)
    {
        $this->pergunta = $pergunta;
        $this->alternativas = $alternativas;
        $this->resposta = $resposta;
    }
    public function getpergunta()
    {
        return $this->pergunta;
    }
    public function getAlternativas()
    {
        return $this->alternativas;
    }
    public function getResposta()
    {
        return $this->resposta;
    }

    public function verifica_resposta($alternativa)
    {
        return ($alternativa == $this->resposta);
    }
    public static function pega_pergunta($id)
    {
        $temp = file_get_contents("./perguntas.json");
        $dados_usuario = json_decode($temp, true);
        $pergunta = new Question(
            $dados_usuario[$id]["pergunta"],
            $dados_usuario[$id]["alternativas"],
            $dados_usuario[$id]["resposta"]
        );
        return $pergunta;
    }
}
