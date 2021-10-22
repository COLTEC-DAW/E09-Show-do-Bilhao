<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
</head>
<body>
    <form method="post">
        Login: <input type="text" name="login"> <br>
        Senha: <input type="password" name="senha"> <br>
    <input type= "submit" name="Log-in">
    </form>
</body>
</html>
<?php
    include "classe_user.php";
    if(isset($_POST["login"]) && isset($_POST["senha"])){
        $novo_user = new User(
            $_POST["login"],
            $_POST["senha"]
        );
        $novo_usuario = array(
            "login" => $novo_user->getLogin(),
            "senha" => $novo_user->getSenha()
        );
        $controle = 0;
        $jsonF = file_get_contents("usuarios.json");
        $jsonDecod = json_decode($jsonF, true);
        foreach($jsonDecod as $user){
            if($novo_usuario["login"] == $user["login"]){
                $controle++;
            }
        }
        if($controle == 0){
            $jsonDecod[] = $novo_usuario;
            $jsonF = json_encode($jsonDecod, JSON_PRETTY_PRINT);
            file_put_contents("usuarios.json", $jsonF);
            header("Location: login.php");
        }else{
            echo("<h2> Usuario já cadastrado!!</h2>");

        }    
    }    

?>