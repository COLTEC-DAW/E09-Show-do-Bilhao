<?php
    require('data.inc');

    function loadQuestion($id)
    {
        global $data;
        return $data[$id];
    }

    function loadFromXML($id)
    {
        $file = simplexml_load_file("data.xml")
            or die("Erro ao abir XML das perguntas");
        foreach($file->data[$id]->alternatives->children() as $alt)
        {
            $options[] = $alt;
        }

        return new Question(
            $file->data[$id]->sentence,
            $options,
            $file->data[$id]->alternatives->attributes()['answer'];
        );
    }
?>