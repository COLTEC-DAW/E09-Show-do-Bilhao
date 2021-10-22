<?php

class User
{
    private $nome;
    private $email;
    private $login;
    private $senha;

    public function __construct($name, $email, $login, $password)
    {

        $this->nome = $name;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $password;

    }

    public function getNome()
    {

        return $this->nome;

    }

    public function getEmail()
    {

        return $this->email;

    }

    public function getLogin()
    {

        return $this->login;

    }

    public function getSenha()
    {

        return $this->senha;

    }


    public static function validaUser($login, $senha)
    {

        $jsonF = file_get_contents("usuariosFile.json");
        $jsonDecod = json_decode($jsonF, true);

        foreach ($jsonDecod as $aux) {


            if ($aux["login"] == $login) {

                if ($aux["senha"] == $senha) {

                    return $aux;

                }
            }
        }
        
        return false;

    }




    public function cadastra()
    {
        $jsonF = file_get_contents("usuariosFile.json");
        $jsonDecod = json_decode($jsonF, true);



        foreach ($jsonDecod as $aux) {
            
            if ($aux["login"] == $this->login) {

                return false;

            }
        }

       
         $newUser = array(
            "nome" => $this->nome,
            "email" => $this->email,
            "login" => $this->login,
            "senha" => $this->senha
         );

        $jsonDecod[] = $newUser;

            $jsonF = json_encode($jsonDecod, JSON_PRETTY_PRINT);
            file_put_contents("usuariosFile.json", $jsonF);


     
        return true;
    }

}
