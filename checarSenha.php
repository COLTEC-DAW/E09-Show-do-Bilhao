<?php
    include "user.inc";
    $senha = $_POST["senha"];
    $login = $_POST["login"];
    //Primeiro parâmetro é o $login e o segundo $senha
    if(verificaLoginSenha($login, $senha))
    {
        $name = retornaNomebyLogin($login);
        header("Location: http://localhost/DAW-E09/telaInicio.php?name=".$name);
    }
    else
    {
        /*
            Erro 2 -> Erro na autenticação do login
            Erro 3 -> Erro na autenticação de senha
        */
        header("Location: http://localhost/DAW-E09/telaLogin.php?error=3");
    }

?>