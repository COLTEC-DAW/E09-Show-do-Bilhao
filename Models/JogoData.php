<?php
    class JogoData{
        var $Pontuacao;
        var $IndicePerguntas = []; 
        var $RodadaAtual;
        var $UltimoIndex;

        function __construct($perguntaId){
            foreach($perguntaId as $value){
                $this->IndicePerguntas[] = $value;
            }
            $this->Pontuacao = 0; 
            $this->RodadaAtual = 0;
            $this->UltimoIndex = -1;
        }
    }
?>