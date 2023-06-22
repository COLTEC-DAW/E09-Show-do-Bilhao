<?php
class login
{
    private $login;
    private $password;
    private $storage = "../users/Usuarios.json";
    private $stored_users;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        $this->login();
    }

    private function login()
    {
        for ($i=0; $i < count($this->stored_users); $i++) {
			if(!strcmp($this->login, $this->stored_users[$i]['login'])){
                if (password_verify($this->password, $this->stored_users[$i]['password'])) {
                    session_start();
                    $_SESSION['user'] = $this->login;
                    header("location: ../pages/MainPage.php");
                    exit();
                }
			}
		}
        header("location: ../pages/Login.php?msg");

    }
}