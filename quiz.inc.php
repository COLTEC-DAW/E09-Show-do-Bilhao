<?php
    require('question.inc.php');
    function QuestionNotFound()
    {
        echo '<div class="error"> <h2>Ops! A pergunta que você procura não existe :(</h2> </div>';
    }

    function LoadFromXML($id)
    {
        $id = $id != null ? $id : 0;

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