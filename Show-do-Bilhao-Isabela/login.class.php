<?php
class LoginUser{

   private $username;
   private $password;
   public $error;
   public $success;
   private $storage = "users.json";
   private $stored_users;
 
   public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
      $this->stored_users = json_decode(file_get_contents($this->storage), true);
      $this->login();
   }

   private function login(){
      foreach ($this->stored_users as $user) {
         if($user['username'] == $this->username && $user['password'] == $this->password){
               header("Location: pergunta.php?id=0");
               return  $this->success = "Você está logado";
            
         }
      }
      return $this->error = "Username ou senha incorrretos";
   }
} 