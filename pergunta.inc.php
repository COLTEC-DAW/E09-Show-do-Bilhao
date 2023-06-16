<?php
    class pergunta 
    {
        public static $numPerguntas = 1;
        private $stringPergunta;
        public $respostas = [];
        public $respostaCorreta;
        public $id;

        public function __construct(string $stringPergunta, array $respostas, int $respostaCorreta) {
            $this->numPerguntas = self::$numPerguntas;

            $this->stringPergunta = $stringPergunta;
            $this->respostas = $respostas;
            $this->respostaCorreta = $respostaCorreta;

            $this->id = self::$numPerguntas;
            self::$numPerguntas++;
        }

        public function printRespostas() {
            $indexResposta = 0;
            echo "<div class='indentacao-alternativas'>";
            // Código de div cortesia do grande Thales Davi. Dá uma leve indentação pras alternativas.

            foreach($this->respostas as $respostaAtual) {
                echo "<input type='radio' id='alternativa-" . $indexResposta . "' name='perguntaAtual' value='" . $indexResposta . "'>";
                // Cria um input de radio com id e valor iguais ao índice atual de resposta
                echo "<label for='alternativa-" . $indexResposta . "'>" . $respostaAtual . "</label><br>";

                $indexResposta++;
            }

            echo "</div><br/>";
        }

        public function printPergunta() {
            echo "<h1> Questão " . $this->id . "<br/></h2><h3>" . $this->stringPergunta . "</h3>";
            $this->printRespostas();
        }
    }

    function printTodasPerguntas(array $perguntas) {
        foreach($perguntas as $perguntaAtual) {
            $perguntaAtual->printPergunta();
        }
    }

    function carregaPergunta(array $perguntas, int $id) {
        $perguntas[$id]->printPergunta();
    }
?>