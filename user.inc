<?php
    class User
    {
        var $nome;
        var $email;
        var $login;
        var $senha;

        function __construct($nomeVAR, $emailVAR, $loginVAR, $senhaVAR)
        {
            $this->nome = $nomeVAR;
            $this->email = $emailVAR;
            $this->login = $loginVAR;
            $this->senha = $senhaVAR;
        }
    }

    function isNewLogin($login)
    {
        $fileUser = "./users.json";
        $userJSON = file_get_contents($fileUser);
        $userArray = json_decode($userJSON);
        foreach($userArray as $element)
        {
            if($element->login == $login)
            {
                return false;
            }
        }
        return true;
    }

    function userRegistration($nome, $email, $login, $senha)
    {
        $fileUser = "./users.json";
        $userJSON = file_get_contents($fileUser);
        $userArray = json_decode($userJSON);
        $userObject = new User($nome, $email, $login, $senha);
        array_push($userArray, $userObject);
        $userPut = json_encode($userArray);
        file_put_contents($fileUser, $userPut);
    }

    function userRegistrationStartFile($nome, $email, $login, $senha)
    {
        /*
            Como essa função é acionada quando o users.json não existe, sua referencia precisa ser relativa
            para ser possível criar o arquivo. Obs: como eu já tinha feito algumas outras refrencias como absolutas (como exemplo os
            links de redirecionamento). Por isso preferi apenas alterar as referências referentes ao arquivo "users.json" para relativas 
            para ser possível criar o arquivo e evitar possível erros, e também alterar as referências de alguns outros redirecionamentos.
        */
        $fileUser = "./users.json";
        $user = new User($nome, $email, $login, $senha);
        $userArray = array();
        array_push($userArray, $user);
        $json = json_encode($userArray);
        file_put_contents($fileUser, $json);
    }

    function verificaLoginSenha($login, $senha)
    {
        //Se essa função é utilizada, já é garantido a existência de login
        $fileUser = "./users.json";
        $userJSON = file_get_contents($fileUser);
        $userArray = json_decode($userJSON);
        foreach($userArray as $element)
        {
            if($element->login == $login)
            {
                if($element->senha == $senha)
                {
                    return true;
                }
            }
        }
        return false;
    }
    function retornaNomebyLogin($login)
    {
        //Se essa função é chamada, o usuário tem um login e senha válidos
        $fileUser = "./users.json";
        $userJSON = file_get_contents($fileUser);
        $userArray = json_decode($userJSON);
        foreach($userArray as $element)
        {
            if($element->login == $login)
            {
                return $element->nome;
            }
        }

    }
    function Erro()
    {
        /*
            Erro 2 -> Erro na autenticação do login
            Erro 3 -> Erro na autenticação de senha
        */
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == 2)
            {
                echo "<script>alert('Login INEXISTENTE. Faça novamente o processo de login ou cadastre-se caso não tenha ainda um cadastro')</script>";
            }
            else if($_GET["error"] == 3)
            {
                echo "<script>alert('Senha INCORRETA. Faça novamente o processo de login.')</script>";
            }

        }
    }

?>