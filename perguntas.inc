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
    function carregaPergunta($pergunta){
                echo $pergunta["enunciado"][0]; 
                echo "<br>";
               
                for($i=0;$i<=2;$i++){
                    echo $pergunta["alternativas"][$i];    

                    echo "<a href='perguntas.php?id=1'><button>Meu Botão</button></a>";     
                           
                    echo "<br>";
                }
                                    echo "<br>";
                                     echo "<br>";  
                                                   
    }
?> 