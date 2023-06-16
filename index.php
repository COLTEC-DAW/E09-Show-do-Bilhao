<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php 
        include "./inc/menu.inc"; 

        if(count($_GET)==0){
            $id=1;
        } else{
            $id= $_GET["id"];
        }

        include "./inc/perguntas.inc";
        
        if($id!=1){
            $id=verificaPergunta($id, $resp);
            echo "$id";
            if($id!=6){
                $resp=carregaPergunta($id);
            } else{
                if($id==6){
                    echo "<h2> GAME OVER </h2>";
                }
            }
        } else{
            $resp=carregaPergunta($id);
            
        }
        echo"resp $resp";

        include "./inc/rodape.inc"; 
    ?>
</body>
</html>