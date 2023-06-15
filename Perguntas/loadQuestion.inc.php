<?php

require(SITE_ROOT."\Perguntas\Question.php");

function load_question($id, $fileName){
    $file = json_decode(file_get_contents($fileName));
    return new Question($file[$id]->question, $file[$id]->options, $file[$id]->answer);
}
?>