<?php

function testUser($login, $senha, $arquivo) {
    $users = json_decode(file_get_contents($arquivo));
    foreach ($users as $user) {
        if ($user->login == $login && $user->senha == $senha) {
            return true;
        }
    }
    return false;
}

function addUser($login, $senha, $email, $nome, $arquivo) {
    $users = json_decode(file_get_contents($arquivo));
    $userIsSet = testUser($login, $senha, $arquivo);
    array_push($users, 
    ["login"=> $login,
    "senha"=> $senha,
    "email"=> $email,
    "nome"=> $nome]);

    file_put_contents($arquivo, json_encode($users, JSON_PRETTY_PRINT));
    if(!$userIsSet) {
        return "login.php";
    }
    else {
        return "cadastroExistente.php";
    }
}

$redirect_to = addUser($_POST['login'], $_POST['senha'], $_POST['email'], $_POST['nome'], "users.json");
header("Location: $redirect_to");

?>