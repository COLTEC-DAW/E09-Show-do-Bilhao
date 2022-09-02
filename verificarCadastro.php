<?php

require "user.php";

function VerificarUsuario($fileName, $data){

    $fileUsers = json_decode(file_get_contents($fileName));

    foreach ($fileUsers as $usuarios){
        if($usuarios->login == $data->login || $usuarios->email == $data->email){
            return TRUE;
        }
    }
    return FALSE;
}

function ArmazenaUsuario($fileName, $data){
    
    $fileUsers = json_decode(file_get_contents($fileName));
    $contentData = $fileUsers;
    array($contentData);
    $User_isset = VerificarUsuario($fileName, $data);

    if ($User_isset) return TRUE;
    else{

        array_push($contentData, $data);
        file_put_contents($fileName, json_encode($contentData, JSON_PRETTY_PRINT));
    }


}

$user = new User($_POST['name'], $_POST['email'], $_POST['login'], $_POST['password']);
$insert = ArmazenaUsuario("json/usuarios.json", $user);

if($insert){
    header("Location: loginExistente.php");
}
else{
    header("Location: index.php");
}

?>