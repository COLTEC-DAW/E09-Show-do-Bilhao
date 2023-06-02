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
            echo "<br>Alternativa Certa: ".$this->rightAlternatives."<br><br>";
        }
    }

$perg = array(
    new Questions("Qual animal come banana?",array("O macaco<br>", "A Girafa<br>", "A Abelha<br>", "O Passaro"),"0"),
    new Questions("Onde se localiza Machu Picchu?", array("Colômbia<br>", "Peru<br>", "China<br>", "Bolívia<br>", "Índia"), "1"),
    new Questions("Que país tem o formato de uma bota?",array("Butão<br>","Brasil<br>","Portugal<br>","Itália<br>","México"),"3"),
    new Questions("A que temperatura a água ferve?",array("200 ºC<br>","-10 ºC<br>","180 ºC<br>","0 ºC<br>","100 ºC"),"4"),
    new Questions("Quantos ossos temos no nosso corpo?",array("126<br>","206<br>","18<br>","300<br>","200"),"1"),
    new Questions("Qual o maior planeta do sistema solar?",array("Marte<br>","Lua<br>","Saturno<br>","Terra<br>","Júpiter"),"4")

);

foreach ($perg as $pergunta) {
    $pergunta->Imprime();
}
?>
