<?php
    // Engloba os dados de uma pergunta
    Class Question{
        var $Enunciado;
        var $Alternativas = [];
        var $Resposta;

        function __construct($enunciado, $alternativas, $resposta){
            $this->Enunciado    = $enunciado;
            $this->Alternativas = $alternativas;
            $this->Resposta     = $resposta;
        }

        function FormatCompleto(){
            $default_Inicio = "\t\t\t" . '<div class="Qcard col-4">';
            $default_Fim = "</div>\n";

            $str = $default_Inicio .$this->Enunciado . "</br>";
            
            $letras = ["A","B","C","D","E","F","G"];
            for($i=0;$i<5;$i++){
                $str = $str . $letras[$i] .") " . $this->Alternativas[$i] . "</br>";
            }

            $str = $str . "Opção correta: " . $letras[$this->Resposta] . ") " . $this->Alternativas[$this->Resposta] . "</br>" . $default_Fim;

            return $str;
        }
    }
?>