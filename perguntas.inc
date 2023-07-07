<?php
 //classe questões 
 class questions {
    public string $enunciado;
    public $questões;
    public string $questaocerta;

    //método construtor das questões 
    public function __construct($enunciado,$alternativaA,$alternativaB,$alternativaC,$alternativaD,$questaocerta){
        $this->enunciado=$enunciado;
        // declara o array questões, separando as alternativas 4 
        $this->questões=array(1=> $alternativaA,2=> $alternativaB, 3=> $alternativaC,4=>$alternativaD,);
        $this->questaocerta=$questaocerta;
    }

    // Função que imprime as questões
    public function enunciado($numero){
    echo"<br> questão: ".$numero."<br>";
        echo ($this->enunciado."<br>");
     } 
     public function MostraAlternativaCerta(){
        echo ("a alternativa certa é a:" .$this->questaocerta."<br>"); 
     }
     public function MostraAlternativas(){
         //armazena cada posição de questões na variavel questão
         foreach($this->questões as $questao){
            echo $questao."<br>";
        }
     }
}
 //construindo as questões com posições fixas de 1 a 5 

 




?>
