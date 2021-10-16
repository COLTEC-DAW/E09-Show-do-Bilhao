
<?php

    require './models/Pergunta.php';
    $dadosPerguntas = json_decode(file_get_contents('./dados/perguntas.json'), false);

    // recebe um index (de 0 a 9) e retorna um objeto Pergunta.
    function getPergunta ($indexPergunta){

        global $dadosPerguntas;

        if (isset($dadosPerguntas[$indexPergunta])){

            $tmp = $dadosPerguntas[$indexPergunta];
            $pergunta = new Pergunta($tmp->enunciado, $tmp->alternativas, $tmp->resposta);
            return $pergunta;
        }

        return null;
    }

    function carregaProgresso($numPerg){
        
        echo "<p>Progresso de sua jornada: $numPerg/10</p>";
    }

    //Mostra a tela de uma nova pergunta a partir de um index.
    function carregaPergunta($numPerg){

        $dadosPergunta = getPergunta($numPerg);

        echo "<fieldset><legend class=\"pergunta\"> {$dadosPergunta->enunciado} </legend><br>";

        foreach($dadosPergunta->alternativas as $key => $value){
            echo "<input type=\"radio\" name=\"alternativa\" value=\"$key\">$value<br>";
        }

        $numPerg++;
        echo "<input type=\"hidden\" name=\"indexPerguntaAtual\" value=\"$numPerg\">
              <br><input type=\"submit\" name=\"Enviar\">
              </fieldset> <br>";
    }

    //Confere a resposta inserida pelo usuário estava correta (retorna true ou false)
    function autenticaOpcao($opcaoEscolhida, $numPergunta){

        
        if (((int)$numPergunta) <= 0){
            return true;
        }
        else{

            $dadosPergunta = getPergunta($numPergunta - 1);
            
            if((int)$dadosPergunta->resposta == (int)$opcaoEscolhida){

                return true;
            }
            else {
                return false;  
            } 
        }
    }

?>