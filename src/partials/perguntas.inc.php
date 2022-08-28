<?php
    require "Question.php";
    function carregaPergunta($id, $nome_arquivo): Question{
        
        $arquivo = json_decode(file_get_contents($nome_arquivo));
        
        $enunciado = $arquivo[$id]->enunciado;
        $alternativas = $arquivo[$id]->enunciado;
        $resposta = $arquivo[$id]->resposta;

        return new Question($enunciado, $alternativas, $resposta);

        //return new Question($arquivo[$id]->enunciado, $arquivo[$id]->alternativas, $arquivo[$id]->resposta);
    }

?>