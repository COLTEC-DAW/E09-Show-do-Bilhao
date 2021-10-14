
<?php
    $perguntas = array("Quais são as fases da Lua? <br/>", 
                            "Qual a montanha mais alta do mundo? <br/>", 
                            "Onde se localiza Machu Picchu? <br/>",
                            "Que país tem o formato de uma bota? <br/>",
                            "Quantos ossos temos no nosso corpo? <br/>");

    $opcoes = array(array("1) Nova, cheia e superlua <br/>",
                            "2) Penumbral, lunar parcial, lunar total e cheia <br/>",
                            "3) Nova, cheia, minguante e lua de sangue <br/>",
                            "4) Nova, crescente, cheia e minguante <br/> <br/>"),
                            
                            array("1) Mauna Kea <br/>",
                            "2) Dhaulagiri <br/>",
                            "3) Monte Chimborazo <br/>",
                            "4) Monte Everest <br/> <br/>"),
                            
                            array("1) Colômbia <br/>",
                            "2) Peru <br/>",
                            "3) Bolívia <br/>",
                            "4) Índia <br/> <br/>"),
                            
                            array("1) Itália <br/>",
                            "2) Brasil <br/>",
                            "3) Portugal <br/>",
                            "4) México <br/> <br/>"),
                            
                            array("1) 126 <br/>",
                            "2) 100 <br/>",
                            "3) 206 <br/>",
                            "4) 300 <br/> <br/>"));

    $respostas = array(3, 3, 1, 0, 2);

    function carregaPergunta($id){
        global $opcoes;
        global $perguntas;

        exibeProgresso($id);
        echo ("<br/> <br/> <br/>");

        echo($perguntas[$id]);
        echo("<br/>");

        for($j = 0; $j <= 3; $j++){
            echo ("<input type='radio' name='alternativa' value='$j' tabindex='0'>");
            echo ($opcoes[$id][$j]);
            echo ("<br/>");
        }
    
        echo("<input type='submit' value='Enviar'>");

        if (isset($_POST['alternativa'])) {
            echo('string'. $_POST['alternativa']);
            $alternativa = $_POST['alternativa'];
            verificaPergunta($id, $alternativa);
        }
    }

    function verificaPergunta($id, $alternativa){
        global $respostas;

        $redirect = "Location: /ShowDoBilhao/perguntas.php?id=" . $id;
        $gameover = "Location: /ShowDoBilhao/gameover.php";

        if($respostas[$id - 1]==$alternativa){
            header($redirect);
        }
        else{
          header($gameover);
        }
    }

    function exibeProgresso($id){
        $progresso = $id;

        if($id == 0){

        }
        else if($id == 1){
            echo("Você acertou " . $progresso . " pergunta");
        }
        else{
            echo("Você acertou " . $progresso . " perguntas");
        }
    }

?>
