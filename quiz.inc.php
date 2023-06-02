<?php
    require('question.inc.php');
    function QuestionNotFound()
    {
        echo '<div class="error"> <h2>Ops! A pergunta que você procura não existe :(</h2> </div>';
    }

    function LoadFromXML($pos)
    {
        $pos = $pos != null ? $pos : 0;

        $file = simplexml_load_file("data.xml")
            or die("Erro ao abir XML das perguntas");
        $options = [];

        if(isset($file->question[$pos]) == false)
        {
            QuestionNotFound();
            return null;
        }
                
        return new Question(
            (int)$pos,
            $file->question[$pos]->sentence,
            $file->question[$pos]->alternatives->children(),
            $file->question[$pos]->alternatives['answer']
        );
    }
?>