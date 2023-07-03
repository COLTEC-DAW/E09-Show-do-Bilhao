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
    include "./inc/interface/menu.inc"; 

        if(count($_GET)==0){
            $id=0;
        } else{
            $id= $_GET["id"]; 
        }

        session_start();
        if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])){ 
            include "./inc/interface/login.inc";

            if(!isset($_COOKIE["ultimo jogo"])){ ?>
                <p> <?php  echo $_COOKIE["ultimo jogo"] ?> </p>
            <?php 
            }
            
            $_SESSION["login"]=$_POST["login"];
            $_SESSION["senha"]=$_POST["senha"];

        } else{

            include "./inc/perguntas.inc";

            if(!isset($_COOKIE["pontuacao"])){
                setcookie("pontuacao", 0);
            }
            setcookie("ultimo-jogo", date("d/m/Y H:i:s"));

            $resp_usuario = $_POST["pergunta"];
            $verificar= verificaPergunta($id, $resp_usuario);

            if($verificar == true && $id<=4 || $id==0){
                include "./inc/interface/form.inc";
            } elseif($id>4){ 
                setcookie("pontuacao");           
                include "./inc/result/vencedor.inc";
            } else{
                setcookie("pontuacao"); 
                include "./inc/result/gameover.inc";
            }
        }
    include "./inc/interface/rodape.inc"; 
    ?>
</body>
</html>