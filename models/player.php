<?php namespace Models;
    Class Player{
        var $name;
        var $username;
        var $email;
        var $password;

        function __construct($name, $username, $email, $password){
            $this->name = $name;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>