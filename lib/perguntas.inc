
<?php

    function carregaProgresso($numPerg){
        
        echo "<p>Acertos: $numPerg/10</p>";
    }

    function carregaPergunta($numPerg, $dadosPergunta){

        $alternativas = $dadosPergunta['alternativas'];

        echo "<fieldset> <legend> {$dadosPergunta["enunciado"]} </legend>";

        foreach($alternativas as $key => $value){

            echo "<input type=\"radio\" name=\"alternativa\" value=\"$key\">$value<br>";
        }

        $numPerg++;
        echo "<input type=\"hidden\" name=\"indexPerguntaAtual\" value=\"$numPerg\">
              <input type=\"submit\" name=\"Enviar\">
              </fieldset> <br>";
    }

    function autenticaOpcao($opcaoEscolhida, $numPergunta, $dados){

        
        if (((int)$numPergunta) == 0){
            return true;
        }
        else{

            $dadosPergunta = $dados[($numPergunta -1)];

            if((int)$dadosPergunta['resposta'] == (int)$opcaoEscolhida){
                
                return true;
            }
            else{
                return false;
            }
        }
    }

?>