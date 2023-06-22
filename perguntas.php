
<body>
    
    <?php

    //pega o id e armazena ele na posição id, 
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    class alternativas {
        public string $alternativaA,$alternativaB,$alternativaC,$alternativaD;

    }

    //classe questões 
    class questions {
        public string $enunciado;
        public $questões;
        public string $questaocerta;

        //método construtor das questões 
        public function __construct($enunciado,$alternativaA,$alternativaB,$alternativaC,$alternativaD,$questaocerta){
            $this->enunciado=$enunciado;
            $this->questões=array(1=> $alternativaA,2=> $alternativaB, 3=> $alternativaC,4=>$alternativaD,);
            $this->questaocerta=$questaocerta;
        }
        // Função que imprime as questões
        public function MostraQuestões($numero){
        echo"<br> questão: ".$numero."<br>";
            echo ($this->enunciado."<br>");
            foreach($this->questões as $questao){
                echo $questao."<br>";
            }
            echo ("a alternativa certa é a:" .$this->questaocerta."<br>");  
        }

        
    }
    
   
    //construindo as questões com posições fixas 
    $perguntas = array(
        1=> new questions("qual o tamanho do meu pau?","A 15 cm","B 22 cm","C 5 cm","D 6 cm","a"),
        2=> new questions("qual o nome do presidente do Brasil?", "Fernando Henrique Cardoso","Lula","Michal Temer","Bolsomito 2022","b"),
        3=>new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a"),
        4=>new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a"),
        5=>new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a")
    );
    
    
    //exibe cada pergunda de acordo com o id da página
    

    $pergunta = $perguntas[$id] ?? null;
    if ($pergunta) {
        $pergunta->MostraQuestões($id);
    } else {
        echo "Pergunta não encontrada.";
    }

  //  for ($i = 1; $i <= count($perguntas); $i++) {
       // $perguntas[$i]->MostraQuestões($i);
      //  }
    ?>  

