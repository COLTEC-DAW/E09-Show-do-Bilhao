<?php include "menu.inc";?> 
<?php include "rodape.inc";?>   
<?php require "perguntas.inc";?> 
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

   
    <div class="sidebar">
    <button>Click Aqui</button>
    <button>Click Aqui</button>
    <button>Click Aqui</button>
    </div>

    <div class="body-text">  
    <?php 
     $gabarito=array( 'a','b','b','a');
      echo GetMenu();
      if(@$_GET['id']==4){
        header('Location:gameover.php?id=4'); 
     }
      if(@$_GET['id']!=0){
        
        $pontos=@$_GET['id'];
        $pontos=$pontos-1;
        $pontos=verifica_resposta($gabarito,$pontos);
        echo $pontos;  
      }

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


                                $pergunta1 = array ( "alternativas"  => array ( 0 => " a) Guilherme Rodrigues",
                                                       1 => " b) Sílvio Santos",
                                                       2 => " c) Jemaf",
                                                                    ),
                                    "enunciado" => array ( "2) qual o dono do SBT?",
                                                    ),
                                                                                );

                                                $pergunta2 = array ( "alternativas"  => array ( 0 => " a) show do milhão",
                                                       1 => " b) show do bilhão",
                                                       2 => " c) show dos mil reais",
                                                                    ),
                                    "enunciado" => array ( "3) qual o nome do programa?",
                                                    ),
                                                                                );

                                                $pergunta3 = array ( "alternativas"  => array ( 0 => " a) Guilherme Rodrigues",
                                                       1 => " b) Otaviano Costa",
                                                       2 => " c) Elon Musk",
                                                                    ),
                                    "enunciado" => array ( "4) qual o criador deste site?",
                                                    ),
                                                                                );
            
                $result = array ( 0 => $pergunta0, 1 => $pergunta1, 2 => $pergunta2, 3 => $pergunta3);
                $id=pegaID();
                $tmp= escolhePergunta(pegaID(),$result);
                carregaPergunta($tmp,$id);                                                              
               
                print_r($gabarito);
                echo $_POST["id"];        
                echo $_POST["resposta"];  
                
                                                                      
            ?>
    </div>
    <?php 
       echo getRodape();
    ?>     
</html> 