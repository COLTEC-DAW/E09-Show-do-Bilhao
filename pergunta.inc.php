<?php
    class pergunta 
    {
        private $stringPergunta;
        public $respostas = [];
        public $respostaCorreta;
        public $id;

        public function __construct(string $stringPergunta, array $respostas, int $respostaCorreta) {
            $this->stringPergunta = $stringPergunta;
            $this->respostas = $respostas;
            $this->respostaCorreta = $respostaCorreta;
        }

        public function printRespostas() {
            $indexResposta = 0;
            echo "<div class='indentacao-alternativas'>";
            // Código de div cortesia do grande Thales Davi. Dá uma leve indentação pras alternativas.
            
            echo "<form method='POST'>";
                foreach($this->respostas as $respostaAtual) {
                    echo "<input type='radio' id='alternativa-$indexResposta' name='perguntaAtual' value='$indexResposta'>";
                    // Cria um input de radio com id e valor iguais ao índice atual de resposta
                    echo "<label for='alternativa-" . $indexResposta . "'>" . $respostaAtual . "</label><br>";

                    $indexResposta++;
                }
                echo "<input type='hidden' value='$this->respostaCorreta' name='respostaCerta' />";

                echo "<input type='submit' value='Submeter resposta' name='submeter' />";
            echo "</form>";
            echo "</div><br/>";

            $this->checarResposta($this->respostaCorreta);
        }

        public function printPergunta() {
            echo "<h1> Questão " . $this->id . "<br/></h2><h3>" . $this->stringPergunta . "</h3>";
            $this->printRespostas();
        }

        function checarResposta(int $respostaCorreta) {
            if(isset($_POST['submeter'])) {
                if($_POST['perguntaAtual'] == $respostaCorreta){
                    $_POST['correto'] = true;
                }
            }
        }
    }

    function printTodasPerguntas(array $perguntas) {
        foreach($perguntas as $perguntaAtual) {
            $perguntaAtual->printPergunta();
        }
    }

    function carregaPergunta(array $perguntas, int $idPergunta) {
        $perguntas[$idPergunta]->id = $idPergunta + 1;
        $perguntas[$idPergunta]->printPergunta();
    }
?>