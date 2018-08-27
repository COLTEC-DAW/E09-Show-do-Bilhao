<?php 
    require "classes/JsonDAO.php";
    require "classes/User.php";

    if(isset($_POST["email"]) && isset($_POST["username"]) &&isset($_POST["nome"]) && isset($_POST["senha"])){
        $email = $_POST["email"];
        $username = $_POST["username"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $user = new User($username, $email, $nome, $senha, 0);
        $json = new JsonDAO("Users.json");
        $result = $json->addUser($user);
        if($result){
            header("Location: /login.php");
        } else {
            header("Location: /cadastrar.php");
        }
    } else{
        header("Location: /cadastrar.php");
    }

?>