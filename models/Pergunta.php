<?php
class Pergunta
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

    public static function carregarPerguntas()
    {
        return json_decode(file_get_contents('data/perguntas.json'), true);
    }
    public static function carregarPergunta($id)
    {
        $perguntas = self::carregarPerguntas();

        if ($id >= 0 && $id < count($perguntas)) {
            $dadosPergunta = $perguntas[$id];
            return new Pergunta($dadosPergunta['pergunta'], $dadosPergunta['alternativas'], $dadosPergunta['resposta']);
        } 
        else {
            return false;
        }
    }
    public function getPergunta()
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
}
?>