<?php include "menu.inc";?> 
<?php include "rodape.inc";?>   
<!DOCTYPE html>
    <!--Guilherme Rodrigues Souza Macieira-->
<html lang="pt-br" dir="ltr">
    <head>
 
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Show do bilhão </title>
    </head>
    "require_once'".$link2."'"; 
   
    <div class="sidebar">
    <button>Click Aqui</button>
    <button>Click Aqui</button>
    <button>Click Aqui</button>
    </div>

    <div class="body-text">  
    <?php 
      echo GetMenu();
    ?>  
           <?php
                  echo "<br>";
                  echo "<br>";
                $pergunta0 = array ( "alternativas"  => array ( 0 => " a) php",
                                                       1 => " b) c#",
                                                       2 => " c) japones",
                                                                    ),
                                    "enunciado" => array ( "1) qual a linguagem de programação representada por um mascote de elefante?",
                                                    ),
                                                                                );
                echo $pergunta0["enunciado"][0]; 
                echo "<br>";
                for($i=0;$i<=2;$i++){
                    echo $pergunta0["alternativas"][$i];     
                    echo" <button>selecionar</button>";             
                    echo "<br>";
                }
                                 echo "<br>";
                                 echo "<br>";
                                $pergunta1 = array ( "alternativas"  => array ( 0 => " a) Guilherme Rodrigues",
                                                       1 => " b) Sílvio Santos",
                                                       2 => " c) Jemaf",
                                                                    ),
                                    "enunciado" => array ( "2) qual o dono do SBT?",
                                                    ),
                                                                                );
                echo $pergunta1["enunciado"][0]; 
                echo "<br>";
                for($i=0;$i<=2;$i++){
                    echo $pergunta1["alternativas"][$i];     
                    echo" <button>selecionar</button>";             
                    echo "<br>";
                }
                                                 echo "<br>";
                                                 echo "<br>";
                                                $pergunta2 = array ( "alternativas"  => array ( 0 => " a) show do milhão",
                                                       1 => " b) show do bilhão",
                                                       2 => " c) show dos mil reais",
                                                                    ),
                                    "enunciado" => array ( "3) qual o nome do programa?",
                                                    ),
                                                                                );
                echo $pergunta2["enunciado"][0]; 
                echo "<br>";
                for($i=0;$i<=2;$i++){
                    echo $pergunta2["alternativas"][$i];     
                    echo" <button>selecionar</button>";             
                    echo "<br>";
                }
                                                echo "<br>";
                                                 echo "<br>";
                                                $pergunta3 = array ( "alternativas"  => array ( 0 => " a) Guilherme Rodrigues",
                                                       1 => " b) Otaviano Costa",
                                                       2 => " c) Elon Musk",
                                                                    ),
                                    "enunciado" => array ( "4) qual o criador deste site?",
                                                    ),
                                                                                );
                echo $pergunta3["enunciado"][0]; 
                echo "<br>";
                for($i=0;$i<=2;$i++){
                    echo $pergunta3["alternativas"][$i];     
                    echo" <button>selecionar</button>";             
                    echo "<br>";
                }
            ?>
    </div>
    <?php 
       echo getRodape();
    ?>     
</html> 