<?php
session_start();
try{
    $users = @json_decode(file_get_contents('users.json'), true);
    $usuario['login'] = $_POST["user[login]"];
    $usuario['senha'] = $_POST["user[senha]"];
    foreach ($users as $user){
            if($users['login'] == $usuario['login']){
                if($users['senha'] == $usuario['senha']){
                    $_SESSION["usuario_logado"] = $user['login'];
                    header("Location: perguntas.php?id=0");
                }else {
                    header("Location: login.php?falhou=true");
                
                }
            }
        }
}catch(Exception $e){
    echo $e->getMessage();
}

?>