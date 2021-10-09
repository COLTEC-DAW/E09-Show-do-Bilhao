<?php
    // Engloba os dados da partida
    class GameData{
        var $Pontuacao;
        var $IndicesQuestoes = [];
        var $RoundAtual;
        var $LastIndex;

        function __construct($questsID){
            foreach($questsID as $value){
                $this->IndicesQuestoes[] =  $value; 
            }
            $this->Pontuacao  = 0;
            $this->RoundAtual = 0;
            $this->LastIndex  = -1;
        }
    }
?>