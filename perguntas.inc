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

        //Arrays de perguntas e respostas
        global $enunciados;
        global $alternativas;
        global $certa;
        $enunciados = array("Qual o nome do Madeira?", "Qual a cor do lab do 3?", "So uma opção está correta:");
        $alternativas[0][0] = "a-joao";
        $alternativas[0][1] = "b-gustavo";
        $alternativas[0][2] = "c-rodrigao";
        $alternativas[0][3] = "d-cuboalex";
        $alternativas[1][0] = "a-rosa";
        $alternativas[1][1] = "b-purple";
        $alternativas[1][2] = "c-amarelo";
        $alternativas[1][3] = "d-invisivel";
        $alternativas[2][0] = "a-nutella";
        $alternativas[2][1] = "b-doce de leite";
        $alternativas[2][2] = "c-bolacha";
        $alternativas[2][3] = "d-biscoito";

        //array(array("a-joao","b-gustavo","c-rodrigao","d-cuboalex"), array("a-rosa","b-purple","c-amarelo","d-invisivel"));
        $certa[0] = 3; //indice para a certa
        $certa[1] = 2;
        $certa[2] = 1;
        
        global $pontuacao;
        $pontuacao = $id+1;
        $_SESSION["pont"] = $pontuacao;


        
        
        global $data;
        $data = $_COOKIE['data'];
        
        if($id!=null){
            echo "<p>Questao:  " .  $enunciados[$id] . " </p>";
            echo "<form action='/ConfereResposta.php' method='post'>"; 
            echo "<input type='hidden' name='resp' value='$certa[$id]'>";
            echo "<input type='hidden' name='ident' value='$id'>";
            for($i=0;$i<4;$i++){
                echo "<input type='radio' name='alter' value='$i'>"  . $alternativas[$id][$i]; 
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
    }

?>



</body>
</html>
