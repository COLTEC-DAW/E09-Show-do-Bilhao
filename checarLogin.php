<?php 
    include "user.inc";
    $login = $_POST["login"];
    /*
        Reutilizo a função isNewLogin (é utilizada na hora do cadastro) que retorna "true" se é um novo login e 
        "false" quando o login já existe no "user.json".
        Desta forma, se retornar false, é porque o login de usuario existe, que é a informação que queremos saber aqui.
        Assim, economizamos código e retiramos a necessidade de fazer uma nova função, reutilizando uma outra já existente para uma
        novo propósito que ela pode também exercer. 
    */
    if(isNewLogin($login) == false)
    {
        header("Location: http://localhost/DAW-E09/senha.php?userLogin=".$login);
    }
    else
    {
        /*
            Erro 2 -> Erro na autenticação do login
            Erro 3 -> Erro na autenticação de senha
        */
            header("Location: http://localhost/DAW-E09/telaLogin.php?error=2");
    }
?>