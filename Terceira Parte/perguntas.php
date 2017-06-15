<?php
 setcookie("pontos",  $_GET["id"]); 
 $nome = $_COOKIE['nome']; 
 autenticar($nome);
 function autenticar ($nome) {
 
  if (!isset($nome)) {
   echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
    session_destroy();
    exit;
  } else {
      
    echo "<p>Olá, $nome.</p>";
 
  }
}
?>
<?php include "menu.inc"; ?>
<?php require 'perguntas.inc';

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

     $id = $_GET["id"];
    if($_GET["id"]<5){
		carregaPerguntas($_GET["id"]);
    }
    else {
       echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=fim.php'>";  
    }
    ?>

<html> 
    <head> 
    </head> 
    <body>
        <form action="confere.php" method="post">
            <input type="hidden" name="num" value="<?php print $_GET["id"]; ?>"/>
            <input type="radio" name="alternativas" value="0" checked><?php echo $alternativas[$_GET["id"]][0]; ?><br>
            <input type="radio" name="alternativas" value="1"> <?php echo $alternativas[$_GET["id"]][1]; ?><br>
            <input type="radio" name="alternativas" value="2"><?php echo $alternativas[$_GET["id"]][2]; ?> <br>
            <input type="radio" name="alternativas" value="3"> <?php echo $alternativas[$_GET["id"]][3]; ?><br>

            <input type="submit" name="Enviar">
        </form>
    </body> 

</html> 


    <?php include 'rodape.inc';?>
