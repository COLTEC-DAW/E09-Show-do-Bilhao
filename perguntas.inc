<?php
    function pegaID(){
     $valor= @$_GET['id'];
     return $valor;
    }
    function escolhePergunta($id,$result){
                return $result[$id];
    }
    function carregapag(){
        $link = "http://localhost/Show/perguntas.php?id=";
        $numero= pegaID();
        $numero= $numero+1;
        $numero=strval($numero);
        $link=($link.+ $numero);
        require_once $link;
    }
    function carregaPergunta($pergunta,$id){
    
                echo $pergunta["enunciado"][0]; 
                echo "<br>";
               
                for($i=0;$i<=2;$i++){
                    echo $pergunta["alternativas"][$i];    


                    echo "<br>";
                }
                echo '<form action="perguntas.php?id='.($id+1).'" method="post">
                <label for="resposta">Resposta: </label>
                <input type="text" id="resposta" name="resposta"><br>
                <input type="hidden" id="id" name="id" value='.($id + 1).'>
                <input type="submit" value="Submit">
                </form>';     
                    
                           
                                    echo "<br>";
                                     echo "<br>";  
                                                   
    }
   function verifica_resposta($gabarito,$pontos){
      $id=$_POST["id"];
      $link2= "Location:gameover.php?id=";
      $link="perguntas.php?id=".$_POST["id"]; 
      if($_POST["resposta"]==$gabarito[$id-1]){
        $pontos=$pontos+1;
         return $pontos;
      }else{      
           $pontos=strval($pontos);
           $link2=($link2. $pontos);
           header($link2); 
           
      }
     
      
    }
?> 