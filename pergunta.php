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
            $indexResposta = 'a';
            echo "<div style='margin-left:30px;'>"; 
            // Código de div cortesia do grande Thales Davi

            foreach($this->respostas as $respostaAtual) {
                echo $indexResposta . ") " . $respostaAtual . "<br/>";
                $indexResposta++; 
                // O StackOverflow disse que aritmética de caractere não funciona assim em PHP, mas o StackOverflow não manda em mim
            }

            echo "</div><br/>";
        }

        public function printPergunta() {
            echo "<b>" . $this->id . ") " . $this->stringPergunta . "</b><br/>";
            $this->printRespostas();
        }
    }
?>