<?php

    function VerificaLogin($fileName, $login, $password){

        $fileUsers = json_decode(file_get_contents($fileName));

        if($fileUsers == NULL){
            header("Location: NenhumUsuarioCadastrado.php");
        }

        foreach ($fileUsers as $usuarios){
            if($usuarios->password == $password && $usuarios->login == $login) return TRUE;
            else if($usuarios->password == $password && $usuarios->login != $login){

                header("Location: loginInvalido.php");

            }else if($usuarios->password != $password && $usuarios->login == $login){

                header("Location: senhaInvalida.php");

            }else{
                header("Location: usuarioNaoCadastrado.php");

            }
        }

        return FALSE;
    
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();

        if(VerificaLogin('json/usuarios.json', $_POST['login'], $_POST['password']) == TRUE){

            $_SESSION["user"] = $_POST["login"];
            header("Location: pergunta.php?id=0");

        }
    }

?>