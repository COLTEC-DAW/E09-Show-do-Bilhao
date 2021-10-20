<?php
class Question{
    var $enunciado;
    var $alternativas;
    var $gabarito;


    function __construct($enunciado, $alternativas, $gabarito){
        $this->enunciado = $enunciado;
        $this->alternativas = $alternativas;
        $this->gabarito = $gabarito;
    }

    function getPerguntas(){
        $json_str = file_get_contents("./perguntas.json");
        $decoded_json = json_decode($json_str, true);

        return $decoded_json;
    }

    function imprime(){
        $Perguntas = $this->getPerguntas();

        $Perguntas_str = '';

        foreach ($Perguntas as $Pergunta) {
            $Perguntas_str = $Perguntas_str . $Pergunta["enunciado"] . '<br>';

            foreach($Pergunta["alternativas"] as $alternativa){
                $Perguntas_str = $Perguntas_str . $alternativa . '<br>';
            }

            $Perguntas_str = $Perguntas_str . 'R:' . '<b>' . $Pergunta["alternativas"][$Pergunta["gabarito"]] . '</b>' . '<br>';
        }
        echo ($Perguntas_str);
    }


}


?>