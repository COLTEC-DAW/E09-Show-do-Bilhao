<?php

class Usuario
{

    private $nome;
    private $email;
    private $login;
    private $senha;

    public function __construct($loginF, $emailF, $passwordF, $nameF) {

        $this->nome = $nameF;
        $this->email = $emailF;
        $this->login = $loginF;
        $this->senha = $passwordF;

    }

    public function pegarNome() {
        return $this->nome;
    }

    public function pegarEmail() {
        return $this->email;
    }

    public function pegarLogin() {
        return $this->login;
    }

    public function pegarSenha(){
        return $this->senha;
    }


    public static function validarUsuario($login, $senha) {

        $ArqJson = file_get_contents("ArquivoUsers.json");
        $decode = json_decode($ArqJson, true);
        foreach ($decode as $Logado) {
            if ($Logado["login"] == $login) {
                if ($Logado["senha"] == $senha) {
                    return $Logado;
                }
            }
        }
        return false;
    }

    public function cadastrarUsuario() {

        $ArqJson = file_get_contents("ArquivoUsers.json");
        $decode = json_decode($ArqJson, true);
        foreach ($decode as $Logado) {
            if ($Logado["login"] == $this->login) {
                return false;
            }
        }
         $newUser = array(
            "email" => $this->email,
            "login" => $this->login,
            "senha" => $this->senha,
            "nome" => $this->nome,
         );
        $decode[] = $newUser;
        
            $ArqJson = json_encode($decode, JSON_PRETTY_PRINT);
            file_put_contents("ArquivoUsers.json", $ArqJson);

        return true;

    }

}