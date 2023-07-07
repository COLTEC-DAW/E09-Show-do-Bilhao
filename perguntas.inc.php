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

        var $questoes;
        var $opcoes;
        var $alternativacorreta;

        public function __construct($enun, $alters, $resp){

            $this->questoes = $enun;
            $this->opcoes = [];
            $this->alternativacorreta = $resp;

            foreach ($alters as $value) {
                $this->opcoes[] = $value;
            }
        }

    }

    function carregaPergunta($id) {

        $arqJSON = file_get_contents("perguntas.json");
        $perguntas = json_decode($arqJSON);

        $pergunta = new Pergunta(
            $perguntas[$id]->questoes,
            $perguntas[$id]->opcoes,
            $perguntas[$id]->alternativacorreta
        );

        return $pergunta;
    }
?>