<?php 
    
    class Questions{
        public $question;
        public $alternatives;
        public $rightAlternatives;

    public function __construct($question, $alternatives, $rightAlternatives){
        $this->question = $question;
        $this->alternatives = $alternatives;
        $this->rightAlternatives = $rightAlternatives;
    }

    public function Imprime(){
        echo "Pergunta: ".$this->question."<br>";
        print_r($this->alternatives);
        echo "<br>Alternativa Certa: ".$this->rightAlternatives;
    }

    }

$alternatives = array();

$pergunta1 = new Questions("Qual animal come banana?",array("O macaco", "A Girafa", "A Abelha", "O Passaro"),"1");
$pergunta1->Imprime();
?>
