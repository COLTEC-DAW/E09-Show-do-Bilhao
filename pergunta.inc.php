<?php
    class pergunta 
    {
        public $stringPergunta;
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

            $this->checarResposta();
        }

        public function printPergunta() {
            echo "<h1> Questão " . $this->id . " de ". $_SESSION['numPerguntas'] . "<br/></h2><h3>" . $this->stringPergunta . "</h3>";
            $this->printRespostas();
        }

        function checarResposta() {
            if(isset($_POST['submeter'])) {
                return $_POST['perguntaAtual'] == $this->respostaCorreta;
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

    function criaPergunta(stdClass $objPergunta) {
        return new pergunta($objPergunta->stringPergunta, $objPergunta->respostas, $objPergunta->respostaCorreta);
    }

    function inicializaPerguntas(array $arrayOriginal) {
        $arrayPerguntas = array();

        foreach ($arrayOriginal as $perguntaAtual) {
            array_push($arrayPerguntas, criaPergunta($perguntaAtual));
        }

        return $arrayPerguntas;
    }
?>