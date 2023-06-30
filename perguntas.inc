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

    $perguntas = array(
        1 => new questions("qual o tamanho do meu pau?", "A 15 cm", "B 22 cm", "C 5 cm", "D 6 cm", "a"),
        2 => new questions("qual o nome do presidente do Brasil?", "Fernando Henrique Cardoso","Lula","Michal Temer","Bolsomito 2022","b"),
        3 => new questions("qual o objeto que se bebe café?", "garrafa vodka", "copo", "xicara", "nas mãos", "c"),
        4 => new questions("qual é uma dupla sertaneja", "Ze neto e Cristiano", "Jose Beto e Luciano", "Heberto e Cristiano", "Mercelo e Juliano", "a"),
        5 => new questions("qual o objeto que se bebe café?", "garrafa vodka", "bbb", "ccc", "ddd", "a")
    );

function carregaPergunta($id,$perguntas) {    
    //retorna a pergunta relacionada a posição da variavel id
    return $perguntas[$id] ?? null;
}




?>
