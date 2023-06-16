<?php
    final class User implements JsonSerializable{
        private $name;
        private $email;
        private $login;
        private $password;
        private $highscore;
        private $score;

    public function __construct($name, $email, $login, $password){
            $this->name = htmlspecialchars($name);
            $this->email = htmlspecialchars($email);
            $this->login = htmlspecialchars($login);
            $this->password = htmlspecialchars($password);
            $this->highscore = 0;
    }

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