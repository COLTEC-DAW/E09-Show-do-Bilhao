<?php
    require('question.inc.php');

    function QuestionNotFound()
    {
        echo '<div class="error"> <h2>Ops! A pergunta que você procura não existe :(</h2> </div>';
    }
    function WinScreen()
    {
        echo '<div class="box">';
        echo '<h1>ACERTOU!</h1>';
        echo '</div>';
    }
    function LoseScreen()
    {
        echo '<div class="box">';
        echo '<h1>ERROOOUU!</h1>';
        echo '</div>';
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
        
        Question::$_numQuest = $file['size'];
        return new Question(
            (int)$pos,
            $file->question[$pos]->sentence,
            $file->question[$pos]->alternatives->children(),
            $file->question[$pos]->alternatives['answer']
        );
    }
?>