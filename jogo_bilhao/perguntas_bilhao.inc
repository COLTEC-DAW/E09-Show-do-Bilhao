<?php 

    require "questao.php";

    function carregaQuestao($num_pergunta, $arquivoEndereco){

        $arquivo = json_decode(file_get_contents($arquivoEndereco));
    
        return new Questao($arquivo[$num_pergunta]->pergunta, $arquivo[$num_pergunta]->alternativas, $arquivo[$num_pergunta]->resposta);

    }

?>