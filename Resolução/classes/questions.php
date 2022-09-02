<?php

class Questions
{
    private $storage = "partials/perguntas.json";
    private $stored_questions;

    public function load_question($id)
    {
        return $this->stored_questions[0]['questions'][$id];
    }
    public function load_option($id)
    {
        return $this->stored_questions[1]['options'][$id];
    }
    public function load_answer($id)
    {
        return $this->stored_questions[2]['answers'][$id];
    }

    public function formulario($question_id, $resposta)
    {
        $loop = 0;
        echo " <form action=\"pergunta.php?id=<?= $question_id + 1 ?>\" method=\"post\">";
        foreach ($this->stored_questions[1]['options'][$question_id] as $option) {
            echo "<input type=\"radio\" name=\"option\" value=\"$loop\" id=\"\">
            <label for=\"$loop\">var_dump($option);</label> <br>";
            $loop++;
        }
        echo "<input type=\"hidden\" name=\"answer\" value=\"<?= $resposta ?>\">
        <input type=\"submit\" value=\"Enviar\">
        </form>";
    }

    public function __construct()
    {
        $this->stored_questions = json_decode(file_get_contents($this->storage), true);
    }
}
