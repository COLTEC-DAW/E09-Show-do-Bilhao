<?php

class User {
  private $nome;
  private $login;
  private $email;
  private $password;

  public function __construct ($email=null, $nome=null, $login, $password) {
    $this->nome = $nome;
    $this->login = $login;
    $this->email = $email;
    $this->password = $password;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getLogin() {
    return $this->login;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  private function readJsonForSignUp ($user) {
    $str = file_get_contents('../files/users.json');
    $json = json_decode($str, true); 

    foreach ($json as $valor){
      if($valor["login"] == $user->getEmail() || $valor["login"] == $user->getLogin()) {
          return false;
      }
    }
    return true;
  }

  private function readJsonForLogin ($user) {
    $str = file_get_contents('../files/users.json');
    $json = json_decode($str, true); 
    $passwordDecoded = null;

    foreach ($json as $valor){
      if($valor["login"] == $user->getLogin()) {
          $passwordDecoded = $valor["password"];
          break;
      }
    }

    return $passwordDecoded;
  }

  public static function decodingSignUp($user) {
    $myFile = "../files/users.json";
    $arr_data = array(); // create empty array

    if (!User::readJsonForSignUp($user)) {
      return false;
    }

    try
    {
      $formdata = array(
        'name'=> $user->getNome(),
        'email'=> $user->getEmail(),
        'login'=> $user->getLogin(),
        'password'=> $user->getPassword()
      );
     
      $jsondata = file_get_contents($myFile);
      $arr_data = json_decode($jsondata, true);

      array_push($arr_data,$formdata);
      
      $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
      
      file_put_contents($myFile, $jsondata);
      header("Location:../php/login.php");
    
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public static function decodingLogin ($user) {
    $passwordDecoded = User::readJsonForLogin($user);
    if($passwordDecoded == null) {
      return false;
    } elseif($passwordDecoded != $user->getPassword()){
      return false; //print in login.php
    } elseif($passwordDecoded == $user->getPassword()) {
      return true;
    }
  }
}

?>