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
        echo "<br>Alternativa Certa: ".$this->rightAlternatives."<br><br>";
    }

    }

$alternatives = array();
$arrayObjetos = array();


$perg = array(
    new Questions("Qual animal come banana?",array("O macaco", "A Girafa", "A Abelha", "O Passaro"),"0"),
    new Questions("Onde se localiza Machu Picchu?", array("Colômbia", "Peru", "China", "Bolívia", "Índia"), "1")
);
$pergunta1 = new Questions("Qual animal come banana?",array("O macaco", "A Girafa", "A Abelha", "O Passaro"),"0");
$pergunta2 = new Questions("Onde se localiza Machu Picchu?", array("Colômbia", "Peru", "China", "Bolívia", "Índia"), "1");

$arrayObjetos[] = array($pergunta2, $pergunta1);

foreach ($perg as $pergunta) {
    $pergunta->Imprime();
}
?>
