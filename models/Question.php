<?php

    class Question{
        private $id_pergunta;
        private $id_alternativaEscolhida;

        function Question ($id_pergunta, $id_alternativaEscolhida) {
            $this->id_pergunta = $id_pergunta;
            $this->id_alternativaEscolhida = $id_alternativaEscolhida;
        }

        //carrega todas as perguntas
        function carregaPerguntas() {

            $arquivo_str = file_get_contents("data/conteudo.json");

            $conteudo = json_decode($arquivo_str);
        
            if ($this->id_pergunta == NULL) {
                $this->carregaPergunta($conteudo, 0);
            }
            elseif (($this->id_pergunta != NULL) && ($this->id_pergunta < 4)) {
                if ($this->id_alternativaEscolhida == $conteudo[$this->id_pergunta]->resposta) {
                    $this->id_pergunta++;
                    $this->carregaPergunta($conteudo, $this->id_pergunta);
                }
                else{
                    require "includes/game_over.inc";
                }
            }
            elseif (($this->id_pergunta != NULL) && ($this->id_pergunta >= 4)) {
                require "includes/vencedor.inc";
            }
            return $this->id_pergunta;    
        }

        //carrega uma pergunta
        function carregaPergunta($conteudo, $id) {
            $id_alternativa = 1;
            echo 
            '<div class="container card">
                <div class="card-body">
                    <form action="/perguntas.php" method="post">
                        <!--enunciado-->
                        <div>
                            <h5>'. ($id+1) .' - ' . $conteudo[$id]->enunciado . '</h5>
                        </div>';
        
            foreach ($conteudo[$id]->alternativas as $valor) {
                echo
                    '   <!--alternativas-->
                        <div class="form-check">
                            <input class="form-check-input" name="alternativa" type="radio" value="'. $id_alternativa .'">
                            <label for="alternativa_a">' . $valor . '</label>
                        </div>';
                
                $id_alternativa++;
            }
            echo'
                        <input type="hidden" name="id" value="'. $id .'">
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Próximo</button>

                        </form>

                        <form action="/logout.php" method="post">
                            <input type="hidden" name="id" value="'. $id .'">
                            <button type="submit" class="btn btn-danger">Sair</button>
                        </form>
                    </div>
                </div>
            </div>
            ';
        }
    }
    
?>