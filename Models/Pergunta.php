<?php
    Class Pergunta{
        var $Enunciado;
        var $Alternativas = [];
        var $Correta;

        function __construct($enunciado, $alternativas, $correta){
            $this->Enunciado = $enunciado;
            $this->Alternativas = $alternativas;
            $this->Correta = $correta;
        }

        function formatarCompleto(){
            $default_Inicio = "\t\t\t" . '<div class="Qcard col-4">';
            $default_Fim = "</div>\n";

            $str = $default_Inicio .$this->Enunciado . "</br>";

            $letras = ["A","B","C","D"];
            for($i = 0; $i < 5; $i++){
                $str = $str . $letras[$i] .") " . $this->Alternativas[$i] . "</br>";
            }

            $str = $str . "Opção correta: " . $letras[$this->Correta] . ") " . $this->Alternativas[$this->Correta] . "</br>" . $default_Fim;

            return $str;
        }
    }
?>