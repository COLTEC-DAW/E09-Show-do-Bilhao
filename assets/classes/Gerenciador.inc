<?php
    require "Pergunta.inc";

    class Gerenciador {
        // Atributos
        public $perguntas;
        public $pontuacao;

        // Construtor
        public function __construct() {
            // inicia array de perguntas
            $this->perguntas = [];
            $this->pontuacao = 0;

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

            echo "<h2 class='pergunta--titulo'>Questão $nQuestao</h2>";
            echo "<p class='pergunta--enunciado'>$perguntaAtual->enunciado</p>";
            
            echo "<form action='index.php?id=$nQuestao' method='POST'>";
            $count = 0;

            foreach($perguntaAtual->alternativas as $alternativa){
                echo "<div class='alternativa'>";
                echo "<input type='radio' name='resp' id='resp$count' value='$alternativa->letra' class = 'input--alternativa'>";
                echo "<p class='non-selected'>$alternativa->letra) $alternativa->resposta</p>";
                echo "</div>";
            
                $count++;
            }
        
            echo "<input type='submit' value='Confirmar resposta' id='BotaoEnviar'>";
            echo "</form>";

            $this->pontuacao = $id;
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