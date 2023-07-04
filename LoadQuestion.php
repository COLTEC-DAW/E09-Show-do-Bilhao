<?php

require "questao.php";

function load_question($id, $fileName){
    $file = json_decode(file_get_contents($fileName));
    return new Questoes($file[$id]->perguntas, $file[$id]->alternativas, $file[$id]->gabarito);
}
?>