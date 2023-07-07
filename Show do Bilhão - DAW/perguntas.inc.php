<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perguntas.css">
    <title>Questions</title>
</head>
<body>
    
</body>
</html>

<?php 

    class Pergunta{

        var $text;
        var $alternatives;
        var $answer;

        public function __construct($enun, $alters, $resp){

            $this->text = $enun;
            $this->alternatives = [];
            $this->answer = $resp;

            foreach ($alters as $value) {
                $this->alternatives[] = $value;
            }
        }

    }

    function carregaPergunta($id) {

        $arqJSON = file_get_contents("perguntas.json");
        $perguntas = json_decode($arqJSON);

        $pergunta = new Pergunta(
            $perguntas[$id]->text,
            $perguntas[$id]->alternatives,
            $perguntas[$id]->answer
        );

        return $pergunta;
    }
?>