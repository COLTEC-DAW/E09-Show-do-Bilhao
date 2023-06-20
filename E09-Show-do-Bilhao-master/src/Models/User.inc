<?php
    class User{
        public $username;
        public $login;
        public $email;
        public $password;

        public function __construct($username, $email, $password, $login) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->login = $login; 
        }
    }
?>