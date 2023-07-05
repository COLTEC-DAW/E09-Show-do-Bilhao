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

        // Imprime as alternativas da pergunta e lê a resposta do usuário
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

        // Imprime a pergunta
        public function printPergunta() {
            echo "<h1> Questão " . $this->id . " de ". $_SESSION['numPerguntas'] . "<br/></h2><h3>" . $this->stringPergunta . "</h3>";
            $this->printRespostas();
        }

        // Checa se a resposta está correta
        function checarResposta() {
            if(isset($_POST['submeter'])) {
                return $_POST['perguntaAtual'] == $this->respostaCorreta;
            }
        }
    }

    // Pega a pergunta atual e imprime na tela
    function carregaPergunta(array $perguntas, int $idPergunta) {
        $perguntas[$idPergunta]->id = $idPergunta + 1;
        $perguntas[$idPergunta]->printPergunta();
    }

    // Cria um objeto pergunta usando um stdClass lido do arquivo
    function criaPergunta(stdClass $objPergunta) {
        return new pergunta($objPergunta->stringPergunta, $objPergunta->respostas, $objPergunta->respostaCorreta);
    }

    // Faz um array de perguntas usando o array de stdClass lido do arquivo
    function inicializaPerguntas(array $arrayOriginal) {
        $arrayPerguntas = array();

        foreach ($arrayOriginal as $perguntaAtual) {
            array_push($arrayPerguntas, criaPergunta($perguntaAtual));
        }

        return $arrayPerguntas;
    }
?>