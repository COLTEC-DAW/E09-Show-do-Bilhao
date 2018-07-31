<?php
        $enunciados = [ "Primeira pergunta",
                        "Segunda pergunta",
                        "Terceira pergunta",
                        "Quarta pergunta",
                        "Quinta pergunta"];

        $respostas = [3, 2, 1, 0, 3]; //contém os índices das respostas corretas.

        $perguntas = [];

        $perguntas[0] = [   "Alternativa A0",
                            "Alternativa B",
                            "Alternativa C",
                            "Alternativa D"];
        
        $perguntas[1] = [   "Alternativa A1",
                            "Alternativa B",
                            "Alternativa C",
                            "Alternativa D"];
        
        $perguntas[2] = [   "Alternativa A2",
                            "Alternativa B",
                            "Alternativa C",
                            "Alternativa D"];
        
        $perguntas[3] = [   "Alternativa A3",
                            "Alternativa B",
                            "Alternativa C",
                            "Alternativa D"];
        
        $perguntas[4] = [   "Alternativa A4",
                            "Alternativa B",
                            "Alternativa C",
                            "Alternativa D"];

        function carregaPergunta($enunciados, $perguntas, $id) {
            $id_alternativa = 0;
            echo 
            '<form action="/perguntas.php" method="post">
                <!--enunciado-->
                <div>
                    <h5>'. ($id+1) .' - ' . $enunciados[$id] . '</h5>
                </div>';
        
            foreach ($perguntas[$id] as $value) {
                echo
                    '<!--alternativas-->
                    <div class="form-check">
                        <input class="form-check-input" name="alternativa" type="radio" value="'. $id_alternativa .'">
                        <label for="alternativa_a">a) ' . $value . '</label>
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

        function carregaPerguntas($enunciados, $perguntas, $respostas) {
            $id_pergunta = @$_POST["id"];
            $id_alternativa = $_POST["alternativa"];
        
            if ($id_pergunta == NULL) {
                carregaPergunta($enunciados, $perguntas, 0);
            }
            elseif (($id_pergunta != NULL) && ($id_pergunta < 4)) {
                if ($id_alternativa == $respostas[$id_pergunta]) {
                    $id_pergunta++;
                    carregaPergunta($enunciados, $perguntas, $id_pergunta);
                }
                else{
                    require "game_over.inc";
                }
            }
            elseif (($id_pergunta != NULL) && ($id_pergunta >= 4)) {
                require "vencedor.inc";
            }
            return $id_pergunta;    
        }
?>