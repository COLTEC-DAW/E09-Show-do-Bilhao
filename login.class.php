<?php
class LoginUser{
   // class properties --------------------------------------
   private $username;
   private $password;
   public $error;
   public $success;
   private $storage = "users.json";
   private $stored_users;
 
   // class methods -----------------------------------------
   //constroi a classe
   public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
      //virou um vetor associativo
      $this->stored_users = json_decode(file_get_contents($this->storage), true);
      $this->login();
   }
 
   //faz o login
   private function login(){
      foreach ($this->stored_users as $user) {
         if($user['username'] == $this->username){
            if(password_verify($this->password, $user['password'])){
               // You can set a session and redirect the user to his account.
               header("Location: pergunta.php?id=0");
               return  $this->success = "You are loged in";
            }
         }
      }
      return $this->error = "Wrong username or password";
   }
} // end of class