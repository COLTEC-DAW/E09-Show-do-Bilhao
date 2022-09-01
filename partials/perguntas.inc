<?php
require "question.php";
function carregaPerguntas($id, $nomeArquivo): Question{
    $arquivo = json_decode(file_get_contents($nomeArquivo));
    return new Question($arquivo[$id]->enunciado, $arquivo[$id]->alternativas, $arquivo[$id]->resposta);
}
?>
