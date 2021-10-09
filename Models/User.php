<?php
    // Engloba os dados de um usuário
    class User{
        var $Name;
        var $UserName;
        var $Email;
        var $Password;

        function __construct($name, $userName, $email, $password){
            $this->Name    = $name;
            $this->UserName = $userName;
            $this->Email    = $email;
            $this->Password = $password;
        }
    }
?>