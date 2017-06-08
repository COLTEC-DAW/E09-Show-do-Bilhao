
    <?php
     $perguntas[0] = "Questão 1. Em qual parte do corpo humano são implantadas as “pontes de safena”?";
     $perguntas[1] = "Questão 2. Quem é conhecido como o “playboy brasileiro”?";
     $perguntas[2] = "Questão 3. Qual é o fruto conhecido no nordeste do Brasil como “jerimum”?";
     $perguntas[3] = "Questão 4. Qual atriz estrelou no filme: “A lagoa azul”?";
     $perguntas[4] = "Questão 5. Como é conhecido o jogador Edmundo?";


  function carregaPerguntas($id) {
         $i = (int)$id;
         global $perguntas;
         echo "<br>";
         echo $perguntas[$i]; 
         echo "<br>";
          
   }
     



    ?>
