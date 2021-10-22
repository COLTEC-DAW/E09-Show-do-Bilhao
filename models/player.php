<?php namespace Models;
    Class Player{
        var $id;
        var $username;
        var $email;
        var $password;

        function __construct($id, $username, $email, $password){
            $this->id = $id;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>