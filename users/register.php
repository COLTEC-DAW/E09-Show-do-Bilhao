<?php 
require "User.php";
class register
{
	private $login;
	private $email;
	private $encrypted_password;
	private $storage = "../users/Usuarios.json";
	private $stored_users;
	private $new_user;

	public function __construct($login, $email, $name, $password){
		$this->login = $login;
		$this->email = $email;
		$this->encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $this->new_user = new User($name, $email, $login, $this->encrypted_password);
		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->insertUser();
	}

	//Da forma como foi feito, se o usuário colocar login e email repetidos,
	//será primeiramente alertado apenas sobre o login, assim que colocar
	//um login diferente, será alertado sobre o email
	private function loginExists(){
		for ($i=0; $i < count($this->stored_users); $i++) { 
			if(!strcmp($this->login, $this->stored_users[$i]['login'])){
				header("location: ../pages/Register.php?msgL");
				return true;
			}
		}
		return false;
	}

	private function emailExists(){
		for ($i=0; $i < count($this->stored_users); $i++) { 
			if(!strcmp($this->email, $this->stored_users[$i]['email'])){
				header("location: ../pages/Register.php?msgE");
				return true;
			}
		}
		return false;
	}

	private function insertUser(){
		if($this->loginExists() == FALSE && $this->emailExists() == FALSE){
			$data = file_get_contents('../users/Usuarios.json');
            $json_arr = json_decode($data, true);
            $json_arr[] = $this->new_user;
			if(file_put_contents('../users/Usuarios.json', json_encode($json_arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))){
				session_start();
				$_SESSION['user'] = $this->login;
				return 0;
			}else{
				return 1;
			}
		}
	}
}