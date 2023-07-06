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
        if(isset($_SESSION["login"]) &&  isset($_SESSION["senha"])){ 
            require "./gerenciadores/perguntas.php";
        }else{
            include "./inc/interface/opcoesLogin.inc";
        }

    include "./inc/interface/rodape.inc"; 
    ?>
</body>
</html>