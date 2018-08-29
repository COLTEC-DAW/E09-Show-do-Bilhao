<?php
  if(!(empty($_POST["login"]) || empty($_POST["senha"]) || empty($_POST["email"]) || empty($_POST["nome"]))) {
    $json = file_get_contents('usuarios.json');
    $json_data = json_decode($json, true);
    foreach ($json_data as $user) {
      echo $user["login"];
      echo $_POST["login"];
      echo $user["senha"];
      echo $_POST["senha"];
      if ($user["login"] == $_POST["login"]) {
        header("Location: logIn.php");
      }
    }
    $json = file_get_contents('usuarios.json');
    $json_data = json_decode($json);
    $array_newData = array("login"=>$_POST["login"], "senha"=>$_POST["senha"], "email"=>$_POST["email"], "nome"=>$_POST["nome"]);
    array_push($json_data, $array_newData);
    $json_data = json_encode($json_data);
    file_put_contents('usuarios.json', $json_data);
    session_start();
    $_SESSION["login"] = $user["login"];
    $_SESSION["senha"] = $user["senha"];
    header("Location:index.php");
    exit();
  } else {
    header("Location: logIn.php");
    exit();
  }
?>
