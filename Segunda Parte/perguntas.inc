
    <?php
     $perguntas[0] = "Questão 1. Em qual parte do corpo humano são implantadas as “pontes de safena”?";
     $perguntas[1] = "Questão 2. Quem é conhecido como o “playboy brasileiro”?";
     $perguntas[2] = "Questão 3. Qual é o fruto conhecido no nordeste do Brasil como “jerimum”?";
     $perguntas[3] = "Questão 4. Qual atriz estrelou no filme: “A lagoa azul”?";
     $perguntas[4] = "Questão 5. Como é conhecido o jogador Edmundo?";

     $alternativas[0] [0] = "0 - Estômago ";
     $alternativas[0] [1] = "1 - Intestino";
     $alternativas[0] [2] = "2 - Pulmão";
     $alternativas[0] [3] = "3 - Coração";
     $alternativas[1] [0] = "0 - Joãozinho Trinta";
     $alternativas[1] [1] = "1 - Zeca Pagodinho";
     $alternativas[1] [2] = "2 - Chiquinho  Scarpa";
     $alternativas[1] [3] = "3 - Chico Buarque";
     $alternativas[2] [0] = "0 - Caju";
     $alternativas[2] [1] = "1 - Abóbora  ";
     $alternativas[2] [2] = "2 - Mandioca";
     $alternativas[2] [3] = "3 - Coco";
     $alternativas[3] [0] = "0 - Alicia Silverstone";
     $alternativas[3] [1] = "1 - Brooke Shields";
     $alternativas[3] [2] = "2 - Julia Roberts";
     $alternativas[3] [3] = "3 - Jessica Lange";
     $alternativas[4] [0] = "0 - Tigrão";
     $alternativas[4] [1] = "1 - Gatinho";
     $alternativas[4] [2] = "2 - Animal";
     $alternativas[4] [3] = "3 - Cobra";

     $respostas[0] = 4;
     $respostas[1] = 3;
     $respostas[2] = 2;
     $respostas[3] = 2;
     $respostas[4] = 3;

  function carregaPerguntas($id) {
         $i = (int)$id;
         global $perguntas;
		     global $alternativas;
         echo "<br>";
         echo $perguntas[$i]; 
         echo "<br>";
          for($j=0; $j<4; $j++){
            echo $alternativas[$i][$j];
            echo "<br>";
          }  
           echo "<br>";
            echo "<br>";
            echo "<br>";  
   }
     
    ?>
