<?php

class User
{
    public $userName;
    public $password;
    public $email;
    public $name;

    public function __construct(string $userName, string $password, string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
        $this->userName = $userName;
        $this->password = $password;
    }

}

?>