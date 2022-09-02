<?php

class Pergunta{
    public $pergunta;      public $respostas;     public $gabarito;

    public function __construct($pergunta, $respostas, $gabarito){        
        $this->pergunta = $pergunta;
        $this->respostas = $respostas;
        $this->gabarito = $gabarito;
    }
}

?>