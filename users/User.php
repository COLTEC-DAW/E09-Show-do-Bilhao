<?php
    final class User implements JsonSerializable{
        private $name;
        private $email;
        private $login;
        private $password;
        private $highscore;
        private $storage = "../users/Usuarios.json";
        private $stored_users;
    

    public function __construct($name, $email, $login, $password){
            $this->name = $name;
            $this->email = $email;
            $this->login = $login;
            $this->password = $password;
            $this->highscore = 0;
            $this->stored_users = json_decode(file_get_contents($this->storage), true);
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

    public function setHighscore($score){
        for ($i=0; $i < count($this->stored_users); $i++) {
			if($this->stored_users[$i]['login'] == $this->login){
                if($score >= $this->highscore){
                    $this->stored_users[$i]['highscore'] = $score;
                    file_put_contents('../users/Usuarios.json', json_encode($this->stored_users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
                }
			}
		}
    }

    public function getHighscore($score){
        for ($i=0; $i < count($this->stored_users); $i++) {
			if($this->stored_users[$i]['login'] == $this->login){
                return $this->stored_users[$i]['highscore'];
			}
		}
    }
}
?>
