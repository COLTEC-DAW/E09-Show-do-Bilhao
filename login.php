<?php

    function VerificaLogin($fileName, $login, $password){

        $fileUsers = json_decode(file_get_contents($fileName));

        foreach ($fileUsers as $usuarios){
        if($usuarios->password == $password && $usuarios->login == $login){
            return TRUE;
        }
        }
        return FALSE;

    }

    $redirect_to = "index.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();

        if(VerificaLogin('json/usuarios.json', $_POST['login'], $_POST['password']) == TRUE){

            $_SESSION["user"] = $_POST["login"];
            $redirect_to = "pergunta.php?id=0";
            header("Location: $redirect_to");

        }else{

            header("Location: $redirect_to");
        }
    }

?>