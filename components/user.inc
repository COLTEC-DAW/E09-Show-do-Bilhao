<?php
  
  function readJsonForLogin ($login) {
    $str = file_get_contents('../files/users.json');
    $json = json_decode($str, true); 
    $passwordDecoded = null;

    foreach ($json as $valor){
      if($valor["login"] == $login) {
          $passwordDecoded = $valor["password"];
          break;
      }
    }

    return $passwordDecoded;
  }

  function readJsonForSignUp ($login, $email) {
    $str = file_get_contents('../files/users.json');
    $json = json_decode($str, true); 

    foreach ($json as $valor){
      if($valor["login"] == $email || $valor["login"] == $login) {
          return false;
      }
    }
    return true;
  }

  function decodingSignUp($name, $email, $login, $password) {
    $myFile = "../files/users.json";
    $arr_data = array(); // create empty array

    if (!readJsonForSignUp($login, $email)) {
      return false;
    }

    try
    {
      $formdata = array(
        'name'=> $name,
        'email'=> $email,
        'login'=> $login,
        'password'=> $password
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

  function decodingLogin ($login, $password) {
    $passwordDecoded = readJsonForLogin($login);
    if($passwordDecoded == null) {
      return false;
    } elseif($passwordDecoded != $password){
      return false; //print in login.php
    } elseif($passwordDecoded == $password) {
      return true;
    }
  }
?>