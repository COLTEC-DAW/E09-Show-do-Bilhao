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

        // session_start();
        // if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])){ ?>
        <!--     <div class='form'>
             <h2> LOGIN </h2>
             <form action='index.php?' method='POST'>
             <div class='login'>
             <label> <input type='text' name='login'> Digite seu nome </label>
             </div>
             <div class='login'>
             <label> <input type='text' name='senha'> Digite a senha </label>
             </div>
             <input class='pergunta' type='submit' name='resp'>-->
        <?php
        //     $_SESSION["login"]=$POST["login"];
        //     $_SESSION["senha"]=$POST["senha"];
        // } else{
            include "./inc/perguntas.inc";
            carregaPergunta($id);
        //}

        include "./inc/rodape.inc"; 
    ?>
</body>
</html>