<body>
    <h1> ou</h1>
    <?php
    class alternativas {
        public string $alternativaA,$alternativaB,$alternativaC,$alternativaD;

    }

    class questions {
        public string $enunciado;
        public $questões;
        public string $questaocerta;


        public function __construct($enunciado,$alternativaA,$alternativaB,$alternativaC,$alternativaD,$questaocerta){
            $this->enunciado=$enunciado;
            $this->questões=array(1=> $alternativaA,2=> $alternativaB, 3=> $alternativaC,4=>$alternativaD,);
            $this->questaocerta=$questaocerta;
        }
        public function MostraQuestões($numero){
        echo"<br> questão: ".$numero."<br>";
            echo ($this->enunciado."<br>");
            foreach($this->questões as $questao){
                echo $questao."<br>";
            }
            echo ("a alternativa certa é a:" .$this->questaocerta."<br>");  
        }
    }
    $perguntas = array(
        1=> new questions("qual o tamanho do meu pau?","A 15 cm","B 22 cm","C 5 cm","D 6 cm","a"),
        2=> new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a"),
        3=>new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a"),
        4=>new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a"),
        5=>new questions("qual o objeto que se bebe café?", "garrafa vodka","bbb","ccc","ddd","a")
    );

    for ($i = 1; $i <= count($perguntas); $i++) {
    $perguntas[$i]->MostraQuestões($i);
    }
    ?>  