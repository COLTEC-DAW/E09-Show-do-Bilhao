<?php
class RegisterUser{
   private $name;
   private $email;
   private $username;
   private $raw_password;
   private $encrypted_password;
   public $error;
   public $success;
   private $storage = "users.json";
   private $stored_users; // array
   private $new_user; // array
   public function __construct($username, $password, $name, $email){
    $this->name = filter_var(trim($name), FILTER_SANITIZE_STRING);
    $this->email = filter_var(trim($email), FILTER_SANITIZE_STRING);
    $this->username = filter_var(trim($username), FILTER_SANITIZE_STRING);
    $this->password = filter_var(trim($password), FILTER_SANITIZE_STRING);
    $this->stored_users = json_decode(file_get_contents($this->storage), true);
    $this->new_user = [
        "name" => $this->name,
        "email" => $this->email,
        "username" => $this->username,
        "password" => $this->password,
    ];
    if($this->checkFieldValues()){
        $this->insertUser();
 }
}

 private function checkFieldValues(){
    if(empty($this->name) || empty($this->email) || empty($this->username) || empty($this->password)){
       $this->error = "Os campos são obrigatórios.";
       return false;
    }else{
       return true;
    }
 }
 
 private function usernameExists(){
    foreach ($this->stored_users as $user) {
       if($this->username == $user['username']){
          $this->error = "Usuário já existe, por favor escolha outro";
          return true;
       }
    }
 }

 private function insertUser(){
    if($this->usernameExists() == FALSE){
       array_push($this->stored_users, $this->new_user);
       if(file_put_contents($this->storage, json_encode($this->stored_users))){
          return $this->success = "Seu Usuário foi cadastrado com sucesso";
       }else{
          return $this->error = "Algo deu errado! Tente novamente!";
       }
    }
 }
}

?>