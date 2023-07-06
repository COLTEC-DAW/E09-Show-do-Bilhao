<?php
    require("questions.php");
    function carregaPergunta($id, $fileName){
        $file = json_decode(file_get_contents($fileName));
        return new Question($file[$id]->question, $file[$id]->options, $file[$id]->answer);
    }

?>