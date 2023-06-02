<?php
    require('data.inc.php');

    function LoadQuestion($id)
    {
        global $data;
        return $data[$id];
    }

    function QuestionNotFound()
    {
        echo '<div class="error"> <h2>Ops! A pergunta que você procura não existe :(</h2> </div>';
    }

    function LoadFromXML($id)
    {
        $file = simplexml_load_file("data.xml")
            or die("Erro ao abir XML das perguntas");
        $options = [];

        if(isset($file->question[$id]) == false)
        {
            QuestionNotFound();
            return null;
        }
                
        return new Question(
            $file->question[$id]->sentence,
            $file->question[$id]->alternatives->children(),
            $file->question[$id]->alternatives['answer']
        );
    }
?>