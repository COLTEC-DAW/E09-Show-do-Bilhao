<?php
class Perguntas{
    private $pergunta;
    private $alternativas;
    private $resposta;

    public function __construct($pergunta, $alternativas, $resposta){
        $this->pergunta = $pergunta;
        $this->alternativas = $alternativas;
        $this->resposta = $resposta;
    }

    public function GetPergunta(){
        return $this->pergunta;
    }

    public function GetAlternativas(){
        return $this->alternativas;
    }

    public function GetResposta(){
        return $this->resposta;
    }   
}
function mostra_pergunta($id){

    $dadosJson = file_get_contents('perguntas.json');
    $dadosJsonDecode = json_decode($dadosJson, true);

    $pergunta = new Perguntas(
        $dadosJsonDecode["perguntas"][$id]["Pergunta"],
        $dadosJsonDecode["perguntas"][$id]["alternativas"],
        $dadosJsonDecode["perguntas"][$id]["resposta"]
    ); 

    echo ("<form action = respostas.php method = 'post' >");
    echo $pergunta->GetPergunta() . "<br>";
    for($j = 0;$j<count($pergunta->GetAlternativas());$j++){
        $alternativas_aux = $pergunta->GetAlternativas();
        echo ("<input type = 'radio' id=". $j ." name = 'forms' value=" .$j. ">
                <label for = ".$j."> ".$alternativas_aux[$j]."</label><br>");
    }
    echo (" <input type = 'hidden' name = 'id' value = ".$id.">
            <input type = 'hidden' name = 'resposta' value = ".$pergunta->GetResposta().">
            <input type = 'submit' value='Enviar'>
            </form>");
}

?>
    