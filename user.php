<?php
    class User{
        public $login;
        public $senha;

        public function __construct($login, $senha){
            $this->login = $login;
            $this->senha = $senha;
        }    
    }

?>