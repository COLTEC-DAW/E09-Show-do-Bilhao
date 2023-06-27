<?php
    date_default_timezone_set('Etc/GMT+3');
    final class User implements JsonSerializable{
        private $name;
        private $email;
        private $login;
        private $password;
        private $highscore;
        private $foto;
        private $last_session;
        private $storage = "../users/Usuarios.json";
        private $stored_users;
    

    public function __construct($name, $email, $login, $password){
            $this->name = $name;
            $this->email = $email;
            $this->login = $login;
            $this->password = $password;
            $this->highscore = 0;
            $this->foto = rand(0, 17);
            $this->last_session = date('d/m/y H:i');
            $this->stored_users = json_decode(file_get_contents($this->storage), true);
    }

    //Apenas para formatação do objeto em .JSON
    #[\ReturnTypeWillChange]
    public function jsonSerialize(){
            return ['name' => $this->name,
                    'email' => $this->email,
                    'login' => $this->login,
                    'password' => $this->password,
                    'highscore' => $this->highscore,
                    'foto' => $this->foto,
                    'last_session' => $this->last_session];
    }

    public function setHighscore($score){
        for ($i=0; $i < count($this->stored_users); $i++) {
			if($this->stored_users[$i]['login'] == $this->login){
                if($score >= $this->stored_users[$i]['highscore']){
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

    public function setLastSession(){
        for ($i=0; $i < count($this->stored_users); $i++) {
			if($this->stored_users[$i]['login'] == $this->login){
                $this->stored_users[$i]['last_session'] = date('d/m/y H:i');
                file_put_contents('../users/Usuarios.json', json_encode($this->stored_users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
			}
		}
    }
}
?>
