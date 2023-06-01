 <!DOCTYPE html>
    <html>
        <body>
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

                        echo "</div>";
                    }

                    public function printPergunta() {
                        echo "<b>" . $this->id . ") " . $this->stringPergunta . "</b><br/>";
                        $this->printRespostas();
                    }
                }

                function printPerguntas(array $perguntas) {
                    foreach($perguntas as $perguntaAtual) {
                        $perguntaAtual->printPergunta();
                    }
                }

                $perguntas = [
                    new pergunta(
                        "Para funcionar, um computador precisa de:", 
                        [
                            "Carvão", 
                            "Eletricidade", 
                            "Energia nuclear", 
                            "Fé"
                        ],
                        1
                    ),

                    new pergunta(
                        "Qual é a definição de \"algoritmo\"?", 
                        [
                            "Uma pequena criatura que vive dentro do gabinete e faz cálculos para você", 
                            "O coração do computador, que precisa ser alimentado com as almas dos inocentes", 
                            "Um conjunto de instruções lógicas, executadas em ordem", 
                            "Uma planta que, quando comida, te dá conhecimento completo de C++"
                        ],
                        2
                    ),

                    new pergunta(
                        "Java, C e Ruby são exemplos de:", 
                        [
                            "Linguagens de scripting", 
                            "Letras do alfabeto", 
                            "Minerais cósmicos dos quais os computadores são feitos", 
                            "Linguagens de programação"
                        ],
                        3
                    ),
                    
                    new pergunta(
                        "Qualquer porta lógica pode ser feita com:", 
                        [
                            "O poder da amizade", 
                            "A porta NAND", 
                            "10 a 15 carangueijos adestrados", 
                            "Portas lógicas não existem. Eu comi todas elas."
                        ],
                        1
                    ),

                    new pergunta(
                        "A diferença entre árvores binárias e quadtrees é:", 
                        [
                            "Um nodo de uma árvore binária possui 2 galhos, enquanto um nodo de uma quadtree possui 4", 
                            "Árvores binárias foram inventadas em 1406 por Sir Jonathan Binário III, enquanto quadtrees foram descobertas nas inscrições das paredes de um templo maia 2 anos atrás", 
                            "Quadtrees, quando usadas em qualquer aplicação exceto sites de música, fazem o computador explodir ao compilar o programa", 
                            "Árvores binárias são cerca de 10^51 vezes mais radioativas do que quadtrees"
                        ],
                        0
                    )
                ];

                printPerguntas($perguntas);
            ?>
    </body>
</html>