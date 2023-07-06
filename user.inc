<?php
    class User {
        public $nome;
        public $login;
        public $email;
        public $senha;
        public function __construct($nome, $login, $email, $senha) {
            $this->nome = $nome;
            $this->login = $login;
            $this->email = $email;
            $this->senha = $senha;
        }
    }

    function salvaUser() {
        if(isset($_POST["cadastro"])) {
            $arquivo = fopen("users.json", "r+");
            $array = [];
            if(filesize("users.json") > 0) {
                $array = json_decode(fread($arquivo, filesize("users.json")))   ;
                fseek($arquivo, 0, SEEK_SET);
            }
            
            array_push($array, new User($_POST["nome"], $_POST["login-nome"], $_POST["email"], $_POST["senha"]));
            fwrite($arquivo, json_encode($array));
            fclose($arquivo);
        }
    }

    function Login() {
        if(isset($_POST["login"])) {
            $arquivo = fopen("users.json", "r");
            $array = [];
            if(filesize("users.json") > 0) {
                $array = json_decode(fread($arquivo, filesize("users.json")));
                foreach($array as $user) {
                    if(($user->login === $_POST["login-nome"]) && ($user->senha === $_POST["senha"])) {
                        $_SESSION["user"] = serialize("user");
                        fclose($arquivo);
                        return true;
                    }
                } 
            }
            fclose($arquivo);
        }
        return false;
    }
    
?>