<?php
     ob_start();
     function carregaPergunta($id){   
        require 'arquivos.inc';
        require 'classes.php';
        $perguntas = decodeperguntas();
        
        $questoes = [];
        for($i = 0 ; $i < 5; $i++){
            $questao =  new Question($perguntas[$i]->per,$perguntas[$i]->alt,$perguntas[$i]->resposta);
            array_push($questoes,$questao);
        }

        if($id <= 4){     
            $id_novo = $id+1;
            $alter = $questoes[$id]->alt;
            echo "<h3>".$questoes[$id]->per."</h3>";
?>
    <form action="checagem.php" method="POST">
<?php
            echo "<input type=\"hidden\" name=\"pergunta\" value=\"$id\">";
            for($j = 0; $j < 4; $j++){
                echo "<input type=\"radio\" name=\"alternativa\" value=\"$j\">$alter[$j]</br>";
            }
            echo "<input type=\"submit\" value=\"Enviar\">";

            echo "<h4>Você já acertou:</h4>".$id;
        }
        else{
            header("location: venceu.php");
        }
    }
?>