<?php

class Perguntas {

    public $enunciado;
    public $alternativas;
    public $resposta;

    // Constructor
    public function __construct($enun, $alters, $resp) {
        $this->enunciado = $enun;
        $this->alternativas = $alters;
        $this->resposta = $resp;
    }

    public function CarregaPergunta($id) {
        $arqJSON = file_get_contents("perguntas.json");
        $perguntas = json_decode($arqJSON, true);

        $pergunta = new Pergunta(
            $perguntas[$id]["enunciado"],
            $perguntas[$id]["alternativas"],
            $perguntas[$id]["resposta"]
        );

        return $pergunta;
    }

}

$pergunta = new Perguntas();
$questao = $pergunta->CarregaPergunta(2);

echo "Enunciado: " . $questao->enunciado;

?>
