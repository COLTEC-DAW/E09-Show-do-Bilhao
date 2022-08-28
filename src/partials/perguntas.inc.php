<?php
    require "Question.php";
    function carregaPergunta($id, $nome_arquivo): Question{
        
        $arquivo = json_decode(file_get_contents($nome_arquivo));

        return new Question($arquivo[$id]->enunciado, $arquivo[$id]->alternativas, $arquivo[$id]->resposta);
    }

?>