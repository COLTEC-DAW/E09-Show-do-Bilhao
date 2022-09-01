<?php
    final class User{
        public $login;
        public $password;
        public $name;
        public $email;

        public function __construct($login, $password, $name, $email){
            $this->login = $login;
            $this->password = $password;
            $this->name = $name;
            $this->email = $email;
        }
    }

?>