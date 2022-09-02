<?php
class RegisterUser{
   // propriedades da classe
   // registro de usuário
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
   public function __construct($name, $email, $username, $password){
    $this->name = filter_var(trim($name), FILTER_SANITIZE_STRING);
   //  filtramos os dados da variável nome
    $this->email = filter_var(trim($email), FILTER_SANITIZE_STRING);
   //  filtramos os dados do email
    $this->username = filter_var(trim($username), FILTER_SANITIZE_STRING);
   //  filtramos os dados do nome de usuário
    $this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);
   //  filtramos os dados da senha
    $this->encrypted_password = password_hash($password, PASSWORD_DEFAULT);
   //  com o password_hash criptografamos a senha
    $this->stored_users = json_decode(file_get_contents($this->storage), true);
   //  array com todos os usuários cadastrados
    $this->new_user = [
        "name" => $this->name,
        "email" => $this->email,
        "username" => $this->username,
        "password" => $this->encrypted_password,
    ];
   //  criamos um novo usuário
    if($this->checkFieldValues()){
        $this->insertUser();
   // cadastra um novo usuário caso não haja nenhuma pendência
 }
}

//valida se os campos de entrada de nome de usuário e senha não estão vazios.
 private function checkFieldValues(){
    if(empty($this->name) || empty($this->email) || empty($this->username) || empty($this->raw_password)){
       $this->error = "Todos os campos são obrigatórios.";
       return false;
    }else{
       return true;
    }
 }

//verifica se o nome de usuário está disponível. 
 private function usernameExists(){
    foreach ($this->stored_users as $user) {
       if($this->username == $user['username']){
          $this->error = "Nome de usuário não disponível :(";
          return true;
       }
    }
 }

//armazena o usuário no arquivo JSON
 private function insertUser(){
    if($this->usernameExists() == FALSE){
       array_push($this->stored_users, $this->new_user);
       if(file_put_contents($this->storage, json_encode($this->stored_users))){
          return $this->success = "Cadastro realizado com sucesso :)";
       }else{
          return $this->error = "Algo deu errado, tente novamente :(";
       }
    }
 }
}



?>