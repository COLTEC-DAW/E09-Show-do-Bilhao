<?php 
    require "classes/JsonDAO.php";
    require "classes/User.php";

    if(isset($_POST["username"]) && isset($_POST["senha"])){
        $username = $_POST["username"];
        $senha = $_POST["senha"];

        $user = new User($username, "", "", $senha, 0);
        $json = new JsonDAO("Users.json");
        $result = $json->autenticaUser($user);
        if($result){
            session_start();
            $_SESSION["username"] = $username;
            header("Location: /game.php");
        } else {
            header("Location: /login.php");
        }
    } else{
        header("Location: /login.php");
    }

?>