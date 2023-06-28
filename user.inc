<?php

class User
{
    public $userName;
    public $password;

    public function __construct(string $userName, string $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

}

?>