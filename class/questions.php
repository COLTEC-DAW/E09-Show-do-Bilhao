<?php class Questions{
    private $storage = "Json/perguntas.json";
    private $perguntas;

    public function __construct(){
        $this->perguntas = json_decode(file_get_contents($this->storage), true);
    }

    public function forms($questID, $answer){
        $loop=0;
        echo " <form action=\"pergunta.php?id=<?= $questID + 1 ?>\" method=\"post\">";
        foreach($this->perguntas[1]['options'][$questID] as $option){
            echo "<input type=\"radio\" name=\"option\" value=\"$loop\" id=\"\">
            <label for=\"$loop\">var_dump($option);</label> <br>";
            $loop++;
        }
        echo "<input type=\"hidden\" name=\"answer\" value=\"<?= $answer ?>\">
        <input type=\"submit\" value=\"Enviar\">
        </form>";
    }

    public function getQuest($id) {return $this->perguntas[0]['questions'][$id];}
    public function getOption($id) {return $this->perguntas[1]['options'][$id];}
    public function getAnswer($id) {return $this->perguntas[2]['answers'][$id];}
} ?>