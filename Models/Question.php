<?php
    class Question{
        var $enunciado;
        var $correta;
        var $alternativas;
    
        function __construct($enunciado, $correta, $alternativas){
            $this->enunciado = $enunciado;
            $this->correta = $correta;
            $this->alternativas = $alternativas;
        }

    
    }

?>