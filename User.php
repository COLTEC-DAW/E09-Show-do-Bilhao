<?php
class User{
    var $nome;
    var $email;
    var $login;
    var $senha;

    public function __construct($nome, $email, $login, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function toString(){
        return $this->nome . ' - ' . $this->email . ' - ' . $this->login . ' - ' . $this->senha;
    }

    function getNome(){
        return $this->nome;
    }

    function getEmail(){
        return $this->email;
    }

    function getLogin(){
        return $this->login;
    }

    function getSenha(){
        return $this->senha;
    }

    function cadastra(){
        $json_str = file_get_contents("./users.json");
        $decoded_json = json_decode($json_str, true);

        $novo = array(
            "nome" => $this->nome,
            "email" => $this->email,
            "login" => $this->login,
            "senha" => $this->senha
        );

        $decoded_json[] = $novo;

        $json_str = json_encode($decoded_json, JSON_PRETTY_PRINT);
        file_put_contents("./users.json", $json_str);

        return $decoded_json;

    }

    function checacadastro($login, $senha){
        $json_str = file_get_contents("./users.json");
        $decoded_json = json_decode($json_str, true);
    
        foreach ($decoded_json as $value) {
            if(strcmp($value["login"], $login) == 0){
                if(strcmp($value["senha"], $senha) == 0){
                    return 0;
                }
            }
        }
    
        return -1;
    }


}
?> 






?>