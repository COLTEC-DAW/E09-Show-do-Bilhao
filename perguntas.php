<?php 
include "pergunt.php";
include "menu.inc";
include "rodape.inc";

?>

<!DOCTYPE html> 
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" ient="IE=edge">
        <meta name="viewport" ient="width=device-width, initial-scale=1.0">
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

                public function ImprimiQuestoes() {
                    
                    echo "<p>$this->perguntas</p>";
            
                    foreach ($this->alternativas as $indice => $alternativa) {
                        echo "<input type='radio' name='resposta_$indice' value='$indice'> $alternativa <br>";
                    }
                    
                    echo "<br>Resposta correta: $this->gabarito";
                    echo "<br>";
        
                }
                    
            }
            
            $perguntas = array("Quem é o melhor jogador de futebol do mundo atualmente?",
                "Quantas bolas de ouro do prêmio de melhor do mundo tem Cristiano Ronaldo?",
                "Em qual país foi realizada as Olimpiedas de 2016?",
                "Qual é o melhor time de futebol do estado de Minas Gerais?",
                "Qual é o jogador de futebol com mais gols marcados em jogos oficiais?"
            );

            $alternativas = array( 
                array("Cristiano Ronaldo","Lionel Messi","Neymar Júnior","Kylian Mbappé"),
                array("2","3","6","5"),array("Suíça","Inglaterra","França","Brasil"),
                array("Atlético Mineiro","América","Cruzeiro","Vila Nova"),
                array("Cristiano Ronaldo","Lionel Messi","Pelé","Josef Bican")
            );

            $gabarito = array("1","3","3","2","0");
            /*
            for ($i = 0; $i < count($perguntas); $i++) {
                $question = new Questoes($perguntas[$i], $alternativas[$i], $gabarito[$i]);
                $question->ImprimiQuestoes();
            }*/
            
        ?>
    </body>
</html>