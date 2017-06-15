<?php include "menu.inc"; ?>
<?php require 'perguntas.inc';

    if($_GET["id"]<5){
		carregaPerguntas($_GET["id"]);
        $prox = '<a href="perguntas.php?'; 
        echo $prox . str_replace("0",$_GET['id']+1,'id=0"') . '>Próxima Pergunta</a>' . '</br>';
    }
    else {
        echo "<br>"; 
        echo "Fim do jogo coleguinhas";
        echo "<br>";
        echo "<br>";

    }
    ?>
    <?php include 'rodape.inc';?>
