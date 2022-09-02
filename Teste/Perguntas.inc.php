<?php
    require "Questão.php";
    function CarregarPergunta($id, $nome_arquivo): Questao
    {
        $arquivo = json_decode(file_get_contents($nome_arquivo));
        return new Questao($arquivo[$id]->enunciado, $arquivo[$id]->alternativas, $arquivo[$id]->resposta);
    }
?>