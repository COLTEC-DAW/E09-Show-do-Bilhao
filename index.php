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
            ?>
            <div class="cadastrar">
                <form  action="" method="post">
                    <input type="submit" name="Cadastro" value="Cadastro">
                    <input type="submit" name="Login" value="Login">
                </form>
            </div>
            <?php 
            

            if($_POST["Cadastro"]=="Cadastro"){
                include "./inc/interface/cadastro.inc";
                cadastroUsuario($_POST["nome"],$_POST["email"],$_POST["login"],$_POST["senha"]);
            }
            
            if($_POST["Login"]=="Login"){
                include "./inc/interface/login.inc";
                // $login=conferirLogin($_POST["login"], $_POST["senha"]);
                // if($login==false){
                //     include "./inc/interface/cadastro.inc";
                // }
            }

            // if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["senha"]) && $_POST["Cadastro"]=="Cadastro"){
                
            // } elseif(isset($_POST["login"]) && isset($_POST["senha"]) && $_POST["Login"]=="Login"){
                
            // }

            $_SESSION["login"]=$_POST["login"];
            $_SESSION["senha"]=$_POST["senha"];

            if(!isset($_COOKIE["ultimo jogo"])){ ?>
                <p> <?php  echo $_COOKIE["ultimo jogo"] ?> </p>
            <?php 
            }

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
                setcookie("pontuacao", $_COOKIE["pontuacao"]+1);
            } elseif($verificar == true && $id>4){ 
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