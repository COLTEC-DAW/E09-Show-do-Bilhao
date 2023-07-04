<?php

require("Questao.php"); 

function load_question($id, $fileName){
    $file = json_decode(file_get_contents($fileName));
    return new Questao($file[$id]->question, $file[$id]->options, $file[$id]->answer);
}
?>