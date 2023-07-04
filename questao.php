<?php 

    class Questoes {
        public $perguntas;
        public $alternativas;
        public $gabarito;

        function __construct($perguntas, $alternativas, $gabarito) {
            $this->perguntas = $perguntas;
            $this->alternativas = $alternativas;
            $this->gabarito = $gabarito;
        }
        public function GetPerguntas() {
            return $this->perguntas;
        }
        public function GetAlternativas() {
            return $this->alternativas;
        }
        public function GetGabarito() {
            return $this->gabarito;
        }

    }

    function carregaPergunta($id) {

        $dadosJson = file_get_contents('questoes.json');
        $dadosJsonDecode = json_decode($dadosJson, true);

        $pergunta = new Questoes(
            $dadosJsonDecode[$id]["perguntas"],
            $dadosJsonDecode[$id]["alternativas"],
            $dadosJsonDecode[$id]["gabarito"]
        );

        echo ("<form action='index.php' method='post'>");
        echo $pergunta->GetPerguntas() . "<br>";
        echo "<input hidden name='resposta' value=<?=$pergunta->gabarito()?>";

        for($j = 0;$j<count($pergunta->GetAlternativas());$j++){
            $alternativas_aux = $pergunta->GetAlternativas();
            echo ("<input type = 'radio' id=". $j ." name = 'escolha' value=".$j." required>
                    <label for = ".$j."> ".$alternativas_aux[$j]."</label><br>");
        }
        echo ("<input type = 'hidden' name = 'id' value = " . $id . ">
                        <input type = 'hidden' name = 'resposta' value = " . $pergunta->GetGabarito() . ">
                        <input type = 'submit' value='Enviar'>
                </form>");
    }



        /*
        public function getQuestoes($id) {
            return new Questoes ($this->perguntas[$id],$this->alternativas[$id],$this->gabarito[$id]);
        }*/

    
?>
