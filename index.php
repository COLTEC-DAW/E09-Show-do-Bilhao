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
            $id=0;
        } else{
            $id= $_GET["id"]; 
        }

        session_start();
        if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])){ ?>
             <div class='form'>
             <h2> LOGIN </h2>
             <form action='index.php?' method='POST'>
             <div class='login'>
             <label> <input type='text' name='login'> Digite seu nome </label>
             </div>
             <div class='login'>
             <label> <input type='text' name='senha'> Digite a senha </label>
             </div>
             <input class='pergunta' type='submit' name='resp'>
             <?php
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
            setcookie("ultimo jogo", date("d/m/Y H:i:s"));

            

            $pergunta = carregaPergunta($id);
            $resp_usuario = $_POST["pergunta"];
            

            
            $id= verificaPergunta($id-1, $resp_usuario);

            ?>

            <div class="form" >
            <h2> <?php echo $pergunta->pergunta ?> </h2>
            <form action="index.php?id=<?php echo $id; ?>" method="POST">
            <?php for($i=1;$i<=4;$i++){
                $alternativa = $pergunta->alternativas[$i-1]; ?>
                <div class="pergunta">
                <label> <input type="radio" name="pergunta" value="<?php echo $i ?>"> <?php echo $alternativa ?> </label>
                </div>
            <?php } ?>
            <input class="pergunta" type="submit" name="resp">
            
            <?php
        }
        include "./inc/rodape.inc"; 
    ?>
</body>
</html>