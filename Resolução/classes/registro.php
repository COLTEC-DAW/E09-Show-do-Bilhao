<?php 
class RegisterUser
{
	private $name;
	private $email;
	private $username;
	private $raw_password;
	private $encrypted_password;
	private $pontuacao = 0;
	public $error;
	public $success;
	private $storage = "partials/users.json";
	private $stored_users;
	private $new_user;


	public function __construct($name, $email, $username, $password){

		$this->name = trim($name);

		$this->email= trim($email);

		$this->username = trim($username);

		$this->raw_password = trim($password);
		$this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"name" => $this->name,
			"email" => $this->email,
			"username" => $this->username,
			"password" => $this->encrypted_password,
			"pontuacao" => $this->pontuacao,
		];

		if($this->checkFieldValues()){
			$this->insertUser();
		}
	}


	private function checkFieldValues(){
		if(empty($this->name) || empty($this->email) || empty($this->username) || empty($this->raw_password)){
			$this->error = "Precisa preencher todos os  campos";
			return false;
		}else{
			return true;
		}
	}


	private function usernameExists(){
		foreach($this->stored_users as $user){
			if($this->username == $user['username']){
				$this->error = "Alguém já tem esse user, escolha outro";
				return true;
			}
		}
		return false;
	}


	private function insertUser(){
		if($this->usernameExists() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "Seu registro foi um sucesso!";
			}else{
				return $this->error = "Algo deu errado, tente de novo (benzendo o código antes de preferência)";
			}
		}
	}



}