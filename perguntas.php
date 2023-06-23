<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do bilhão</title>
</head>
<body>
    
</body>
</html>
      <?php
    include 'perguntas.inc';

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
    include 'menu.inc';
    $pergunta=carregaPergunta($id);

    if ($pergunta) {
        $pergunta->MostraQuestões($id);
    } else {
        echo "Pergunta não encontrada.";
    }
    include 'rodape.inc';

  //  for ($i = 1; $i <= count($perguntas); $i++) {
       // $perguntas[$i]->MostraQuestões($i);
      //  }
    ?>  
</body>
</html>
