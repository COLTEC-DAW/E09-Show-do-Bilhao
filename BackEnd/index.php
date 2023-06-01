<?php 
    
$alternatives = array(
    $alternative1 = "a",
    $alternative2 = "b",
    $alternative3 = "c",
    $alternative4 = "d",
);

    class Questions{
        public $question;
        public $alternatives;
        public $rightAlternatives;

    public function Imprime(){
        echo "Pergunta: ".$this->question."Alternativas: ".$this->alternatives."<br>Alternativa Certa: ".$this->rightAlternatives;
    }

    }

$pergunta1 = new Questions();
$pergunta1->question = "Qual o piriri do pororo?";
$pergunta1->rightAlternatives = "C";
$pergunta1->alternatives[0] = "cacete"; 
var_dump($pergunta1);

?>
