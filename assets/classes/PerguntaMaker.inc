<?php
    require "Pergunta.inc";

    class PerguntaMaker {
        // Atributos
        public $perguntas;

        // Construtor
        public function __construct() {
            // inicia array de perguntas
            $this->perguntas = [];

            $alternativasProvisorias = ["Alternativa a","Alternativa b","Alternativa c","Alternativa d","Alternativa e"];

            $this->perguntas[] = new Pergunta("Primeiro enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Segundo enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Terceiro enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Quarto enunciado", $alternativasProvisorias, 0);
            $this->perguntas[] = new Pergunta("Quinto enunciado", $alternativasProvisorias, 0);
            
        }
    
        public function carregaPergunta($id) {
            $perguntaAtual = $this->perguntas[$id];

            $nQuestao = $id+1;

            echo "<h2>Questão $nQuestao</h2>";
            echo "<p>$perguntaAtual->enunciado</p>";
            
            echo "<form action='index.php?id=$nQuestao' method='POST'>";
            echo "<label for='resp'>";

            foreach($perguntaAtual->alternativas as $alternativa){
                echo "<div>";
                echo "<input type='radio' name='resp' value='$alternativa->letra'>";
                echo "$alternativa->letra) $alternativa->resposta";
                echo "</div>";
            }
            echo "</label>";
        
            echo "<input type='submit' name='Confirmar resposta' id='BotaoEnviar'>";
            echo "</form>";
        }

        public function buscaAlternativaCorreta($id) {
            foreach($this->perguntas[$id]->alternativas as $alternativa) {
                if($alternativa->ehCorreta) {
                    return $alternativa->letra;
                }
            }
        }
    }
?>