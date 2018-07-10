<?php
    $str = file_get_contents('../files/questions.json');
    $json = json_decode($str, true); 

    function carregaPergunta($id) {
        global $json;
        $enunciados = $json[$id]["enunciado"];
        $alternativas = $json[$id]["alternativas"];
      
        echo "<div class = 'ui medium header'>" . $enunciados . "</div>";
        echo "<form action='perguntas.php' method='POST'>";
            echo "<div class='ui form'>"; 
                echo "<div class='grouped fields'>";
                    echo "<label>Selecione a alternativa correta:</label>";
                    
                    foreach ($alternativas as $alternativa) {
                        echo "<div class='field'>";
                        echo "<div class='ui radio checkbox'>";
                            echo "<input type='radio' name='alternativa' value='". $alternativa ."'   id='". $alternativa ."' tabindex='0' class='hidden'>";
                            
                            echo "<label for = '".$alternativa."'>". $alternativa ."</label>";
                        echo "</div>";
                        echo "</div>";
                    }
                echo "</div>";
                
                echo "<input type='hidden' name='id' value='" . ($id+1) ."'>";
		        echo "<button class='ui button' type='submit'>Próximo</button>";
            echo "</div>";
        echo "</form>";
    }

    function checandoResposta($id, $resp) {
        global $json;
        $alternativaCorreta = $json[$id-1]["alternativaCorreta"];
        $alternativas = $json[$id-1]["alternativas"];

        if($alternativas[$alternativaCorreta] == $resp) {
            if ($id == 5) {
                $redirect = "winner.php";
                header("location:$redirect");
                timeAndScore($id);
            }
        } else {
            $redirect = "error.php";
            header("location:$redirect");
            timeAndScore($id);
        }   
    }    

    function timeAndScore($score){
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y h:i:s a', time());
        setcookie("score", $score, time() + (86400 * 30), "/"); // 86400 = 1 day  
        setcookie("time", $date, time() + (86400 * 30), "/");       
    }
?>  