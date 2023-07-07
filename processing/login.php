<?php
    class User{
        public $nome;
        public $email;
        public $login;
        public $senha;


        public function __construct($nome, $email, $login, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
        }

    }



    function cadastraAluno($nome, $email, $login, $senha){

        $usersJson = file_get_contents("data/users.json");
        $users = json_decode($usersJson, true);

        $user = new User($nome, $email, $login, $senha);

        if($users == null){
            $users = [$user];
        }else{
            array_push($users, $user);        
        }

        $usersJson = json_encode($users, true);
        file_put_contents("data/users.json", $usersJson);

        return true;
    }


    function autenticar($usuario, $senha) {
        $usersJson = file_get_contents("data/users.json");
        $users = json_decode($usersJson, true);

        foreach($users as $u){
            
            if($u["login"] == $usuario && $u["senha"] == $senha){
                return true;
            }
            
        }

        return false;
    }
?>