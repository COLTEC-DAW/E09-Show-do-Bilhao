<?php
final class Questao
{
    public string $enunciado;
    public array $alternativas;
    public int $resposta;
    public function __construct(string $enunciado, array $alternativas, int $resposta){
        $this->enunciado = $enunciado;
        $this->alternativas = $alternativas;
        $this->resposta = $resposta;
    }
}
?>