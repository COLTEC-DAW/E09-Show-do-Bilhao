<?php
class Question{

    var $enunciado;
    var $alternativas;
    var $resposta;

    function __construct($enunciado, $alternativas, $resposta){
        $this->enunciado = $enunciado;
        $this->alternativas = $alternativas;
        $this->resposta = $resposta;
    }
}
?>