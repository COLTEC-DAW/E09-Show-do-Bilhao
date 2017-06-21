<?php
    ob_start();
?>


<!DOCTYPE html>
<html>
<?php
    include "head.inc";
?>
<body>
    <?php
    
    function carregaPergunta($id){
        global $nomeLogin;
        $nomeLogin = $_COOKIE['Login'];

            
        //pega enunciados, alternativas e respostas
        $fp = fopen("perguntas.json", "r");
        $info = file_get_contents("perguntas.json");
        $jsonObj = json_decode($info);
            
        global $pontuacao;
        $pontuacao = $id;
        $_SESSION["pont"] = $pontuacao;

        
        global $data;
        $data = $_COOKIE['data'];
        
        if($id!=null && $id<3){
            echo "<p>Questao:  " .  $jsonObj[$id]->enunciado . " </p>";
            echo "<form action='/ConfereResposta.php' method='post'>"; 
            echo "<input type='hidden' name='ident' value='$id'>"; //id post
            for($i=0;$i<4;$i++){
                echo "<input type='radio' name='alter' value='$i'>"  . $jsonObj[$id]->alternativas[$i]; 
                echo "<br>";
            }
            echo "<input type='submit' value='Submit'>";
            echo "<br>";
            echo "<input type='hidden' name='points' value'$pontuacao'>";
            echo "<p> Pontuação " .$nomeLogin. ": " . $pontuacao . "</p>";
            echo "<p> Data do último jogo: " . $data . "</p>";  
            echo "</form>";
            echo '<a href="logout.php"><button type="button" class="btn btn-danger">Sair</button></a>';
        }
        else if($id>=3){
            header("Location: /ganhou.php");
        }
        fclose($fp);
    }

?>



</body>
</html>
