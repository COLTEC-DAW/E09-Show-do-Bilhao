    <?php

        $arquivo_str = file_get_contents("data/conteudo.json");

        $conteudo = json_decode($arquivo_str);

        //carrega todas as perguntas
        function carregaPerguntas($conteudo) {
            $id_pergunta = @$_POST["id"];
            $id_alternativaEscolhida = $_POST["alternativa"];
        
            if ($id_pergunta == NULL) {
                carregaPergunta($conteudo, 0);
            }
            elseif (($id_pergunta != NULL) && ($id_pergunta < 4)) {
                if ($id_alternativaEscolhida == $conteudo[$id_pergunta]->resposta) {
                    $id_pergunta++;
                    carregaPergunta($conteudo, $id_pergunta);
                }
                else{
                    echo $id_alternativaEscolhida;
                    echo $conteudo[$id_pergunta]->resposta;
                    require "game_over.inc";
                }
            }
            elseif (($id_pergunta != NULL) && ($id_pergunta >= 4)) {
                require "vencedor.inc";
            }
            return $id_pergunta;    
        }

        //carrega uma pergunta
        function carregaPergunta($conteudo, $id) {
            $id_alternativa = 1;
            echo 
            '<form action="/perguntas.php" method="post">
                <!--enunciado-->
                <div>
                    <h5>'. ($id+1) .' - ' . $conteudo[$id]->enunciado . '</h5>
                </div>';
        
            foreach ($conteudo[$id]->alternativas as $valor) {
                echo
                    '<!--alternativas-->
                    <div class="form-check">
                        <input class="form-check-input" name="alternativa" type="radio" value="'. $id_alternativa .'">
                        <label for="alternativa_a">a) ' . $valor . '</label>
                    </div>';
                
                $id_alternativa++;
            }
            echo'
                <input type="hidden" name="id" value="'. $id .'">
                <button type="submit" class="btn btn-primary">Próximo</button>
                </form>

                <form action="/logout.php" method="post">
                    <button type="submit" class="btn btn-danger">Sair</button>
                </form>
            ';
        }


    ?>