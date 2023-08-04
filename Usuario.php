<?php
    class Usuario
    {
        public $name;
        public $email;
        public $login;
        public $senha;

        public function __construct($name, $email, $login, $senha)
        {
            $this->name = $name;
            $this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
        }
    }
?>