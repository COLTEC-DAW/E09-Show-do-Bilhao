<?php

class Pergunta{

    public $enunciado;
    public $alternativas;
    public $resposta;

    //Constructor
    public function __construct($enun, $alters, $resp){
        
        $this->enunciado = $enun;
        $this->alternativas = [];

        //Somente o texto de cada alternativa
        foreach ($alters as $value) {
            $this->alternativas[] = $value;
        }

        //Index da alternativa correta
        $this->resposta = $resp;
    }

    function CarregaPergunta($id){

        $arqJSON = file_get_contents("perguntas.json");
        $perguntas = json_decode($arqJSON);

       
        /*echo "Enunciado - " . $perguntas[$id]->enunciado . "<br><br>";
        foreach ($perguntas[$id]->alternativas as $key2 => $value2) {
            echo $value2 . "<br>";
        }
        echo "<br>";
        echo $perguntas[$id]->resposta . "<br><br>";
        */

        $pergunta = new __construct(
            $perguntas[$id]->enunciado, 
            $perguntas[$id]->alternativas, 
            $perguntas[$id]->resposta
        );

        return $pergunta;
    }

}

?>