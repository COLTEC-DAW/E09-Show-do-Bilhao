<!DOCTYPE html> 
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>
        <h1>Show do Bilhão</h1>
        <?php 

            class Questoes {
                public $perguntas; 
                public $alternativas;
                public $gabarito; 
                
                public function __construct($perguntas, $alternativas, $gabarito){
                    $this->perguntas=$perguntas;
                    $this->alternativas=$alternativas;
                    $this->gabarito=$gabarito;

                }


                public function ImprimirPer() {

                }
            }
            
            $question = array(
                new Questoes("Quem é o melhor jogador de futebol do mundo atualmente?", array("Cristiano Ronaldo","Lionel Messi","Neymar Júnior","Kylian Mbappé"), "1"),
                new Questoes("Quantas bolas de ouro do prêmio de melhor do mundo tem Cristiano Ronaldo?", array("2","3","6","5"), "3"),
                new Questoes("Em qual país foi realizada as Olimpiedas de 2016?", array("Suíça","Inglaterra","França","Brasil"), "3"),
                new Questoes("Qual é o melhor time de futebol do estado de Minas Gerais?", array("","","",""), ""),
                new Questoes("", array("","","",""), ""),

            );
            /*
            $perguntas = array (
                array(),
                array().
                array(),
                array(),
                array(),

            );

            $alternativas = array (
                array(),
                array().
                array(),
                array(),
                array(),
                
            );

            $gabarito = array ();

            */
            
        ?>
    </body>
</html>