<?php
    final class User implements JsonSerializable{
        private $name;
        private $email;
        private $login;
        private $password;
        private $highscore;
        private $score;

    public function __construct($name, $email, $login, $password){
            $this->name = $name;
            $this->email = $email;
            $this->login = $login;
            $this->password = $password;
            $this->highscore = 0;
    }

    //Apenas para formatação do objeto em .JSON
    #[\ReturnTypeWillChange]
    public function jsonSerialize(){
            return ['name' => $this->name,
                    'email' => $this->email,
                    'login' => $this->login,
                    'password' => $this->password,
                    'highscore' => $this->highscore];
    }

}
?>