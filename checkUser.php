<?php
  if(isset($_POST["login"]) && isset($_POST["senha"])) {
    $json = file_get_contents('usuarios.json');
    $json_data = json_decode($json, true);
    foreach ($json_data as $user) {
      if ($user["login"] == $_POST["login"] && $user["senha"] == $_POST["senha"]) {
        session_start();
        $_SESSION["login"] = $user["login"];
        $_SESSION["senha"] = $user["senha"];
        header("Location:index.php");
        exit();
      }
    }
    header("Location: logIn.php");
    exit();
  } else {
    header("Location: logIn.php");
    exit();
  }
?>
