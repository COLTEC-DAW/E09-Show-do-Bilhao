<?php
$redirect_to = "index.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $users = json_decode(file_get_contents("users.json"));

    foreach ($users as $user) {
        if ($user->login == $login && $user->senha == $senha) {
            $_SESSION["user"] = $login;
            $redirect_to = "pergunta.php";
            break;
        }
    }
}

header("Location: $redirect_to");