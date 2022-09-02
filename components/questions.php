<?php
    function loadQuestion($id) {
        $filePath = "./dataBase/questions.json";

        $file = fopen($filePath, "r");
        $questions = json_decode(fread($file, filesize($filePath)));

        fclose($file);

        return $questions[$id];
    }
?>