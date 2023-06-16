<?php 
require "User.php";
class register
{
	private $name;
	private $email;
	private $login;
	private $password;
	private $encrypted_password;
	public $error;
	public $success;
	private $storage = "../users/Usuarios.json";
	private $stored_users;
	private $new_user;


	public function __construct($name, $email, $login, $password){
		$this->encrypted_password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->new_user = new User($name, $email, $login, $this->encrypted_password);
		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->insertUser();
	}

	private function loginExists(){
		foreach($this->stored_users as $user){
			if($this->login == $user['login']){
				$this->error = "Alguém já tem esse user, escolha outro";
				return true;
			}
		}
		return false;
	}

	private function insertUser(){
		if($this->loginExists() == FALSE){
			$data = file_get_contents('../users/Usuarios.json');
            $json_arr = json_decode($data, true);
            $json_arr[] = $this->new_user;
			if(file_put_contents('../users/Usuarios.json', json_encode($json_arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))){
				return $this->success = "Seu registro foi um sucesso!";
			}else{
				return $this->error = "Algo deu errado, tente de novo (benzendo o código antes de preferência)";
			}
		}
	}



}