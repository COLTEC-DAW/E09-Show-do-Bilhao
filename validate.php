<?php 
    $filePath = "./dataBase/users.json";

    $login = $_POST["login"];
    $password = $_POST["password"];

    //abre o arquivo e lê todos os usuários existentes
    $file = fopen($filePath, "r+");
    $users = json_decode(fread($file, filesize($filePath)));

    //OBS: há um usuário default: login: admin / password: admin
    foreach($users as $user) {
        if($user->login == $login) {
            echo "<script>alert('Usuário já existente')</script>";
        }
    }
?>