<?php 

    class Usuarios {
        public $nome;
        public $email;
        public $login;
        public $senha;

        function __construct($nome, $email, $login, $senha) {
            $this->nome = $nome;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
        }
        public function GetNome() {
            return $this->nome;
        }
        public function GetEmail() {
            return $this->email;
        }
        public function GetLogin() {
            return $this->login;
        }
        public function GetSenha() {
            return $this->senha;
        }

    }

?>

