<?php

    function carregaPerguntas($id) {
        global $per;
        global $alternativa;
        echo "<br>";
        echo $per[(int)$id]; 
        echo "<br>";
        echo "<br>";
        for($j=0; $j<4; $j++){
            echo $alternativa[(int)$id][$j];
            echo "<br>";
            echo "<br>";
        }  
        echo "<br>";
    }

        $per[0] = '1 - O que o Brasil será em 2018?';
        $alternativa[0][0] = 'a. Hexa';
        $alternativa[0][1] = 'b. Penta';
        $alternativa[0][2] = 'c. Comunista';
        $alternativa[0][3] = 'd. Octa';
        

        $per[1] = '2 - Qual o nome do mascote do Brasil nas copas?';
        $alternativa[1][0] = 'a. Leãozinho';
        $alternativa[1][1] = 'b. Canarinho putasso';
        $alternativa[1][2] = 'c. Gatinho';
        $alternativa[1][3] = 'd. Matadorzinho de alemão';
        

        $per[2] = '3 - Quem é o melhor jogador do mundo atualmente? (sem clubismo)';
        $alternativa[2][0] = 'a. Messi';
        $alternativa[2][1] = 'b. CR7';
        $alternativa[2][2] = 'c. Valdívia poko pika';
        $alternativa[2][3] = 'd. Suárez';
        

        $per[3] = '4 - Quem o Brasil tá mais com sangue no zói pra destruir em 2018?';
        $alternativa[3][0] = 'a. Itália';
        $alternativa[3][1] = 'b. França';
        $alternativa[3][2] = 'c. Alemanha';
        $alternativa[3][3] = 'd. Canadá';
        

        $per[4] = '5 - Qual o nome do jogador mais humilde das olimpíadas de 2016?';
        $alternativa[4][0] = 'a. Neymar';
        $alternativa[4][1] = 'b. Rodrigo Caio';
        $alternativa[4][2] = 'c. Luan';
        $alternativa[4][3] = 'd. Glória, glória, Gabriel Jesus (esse)';
        
        $resposta[0] = 0;
        $resposta[1] = 1;
        $resposta[2] = 2;
        $resposta[3] = 2;
        $resposta[4] = 3;


     
?>
