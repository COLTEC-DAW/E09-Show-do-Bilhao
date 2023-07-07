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
    }

?>

