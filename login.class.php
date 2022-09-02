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
   public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
      $this->stored_users = json_decode(file_get_contents($this->storage), true);
      $this->login();
   }
 
   private function login(){
      foreach ($this->stored_users as $user) {
         if($user['username'] == $this->username){
            if(password_verify($this->password, $user['password'])){
               $username_logado = $user['username'];
               // You can set a session and redirect the user to his account.
               header("Location: pergunta.php?id=0");
               return  $this->success = "Você está logado como $username_logado";
            }
         }
      }
      return $this->error = "Nome de usuário ou senha incorretos";
   }
} // end of class
?>