<?php
final class Question{

    public string $enunciado;
    public array $alternativas;
    public int $resposta;

    public function __construct($enunciado, $alternativas, $resposta){
        $enunciado = $this->$enunciado;
        $alternativas = $this->$alternativas;
        $resposta = $this->$resposta;
    }
}
?>