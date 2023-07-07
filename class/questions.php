<?php class Questions{
    private $storage = "Json/perguntas.json";
    private $perguntas;

    public function __construct(){
        $this->perguntas = json_decode(file_get_contents($this->storage), true);
    }
    
    public function getQuest($id) {return $this->perguntas[0]['questions'][$id];}
    public function getOption($id) {return $this->perguntas[1]['options'][$id];}
    public function getAnswer($id) {return $this->perguntas[2]['answers'][$id];}
} ?>