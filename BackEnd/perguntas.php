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
        foreach ($this->alternatives as $alternatives) {
            echo $alternatives;
        }
    }
}

?>