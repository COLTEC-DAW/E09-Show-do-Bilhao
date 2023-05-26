<?php
    class Alternativa{
        public $letter;
        public $enunciado;

        public function __construct($l, $enun) {
            $this->letter = $l;
            $this->enunciado = $enun;
        }
    }

    class Question{
        public $enunciado;
        public $alternativas;
        public $alternativaCertaIndex;
    }

    $question1 = new Question;
    $question1->enunciado = "Enum1";
    $question1->alternativas = [
        new Alternativa("a", "Alternativa1"),
        new Alternativa("b", "Alternativa2"),
        new Alternativa("c", "Alternativa3"),
        new Alternativa("d", "Alternativa4")
    ];
    $question1->enunciado = "Enum1";
    

    class Game{
        public $questions = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "header.inc"; ?>

</body>
</html>