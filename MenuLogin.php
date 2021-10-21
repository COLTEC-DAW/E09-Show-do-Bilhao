
<?php
  session_start();
 if(isset($_COOKIE['User'])){
  $_SESSION['User'] = $_COOKIE['User'];
  header("Location: Menu.php");
}else if(isset($_POST['User'])){
    setcookie('User',$_POST['User'],time()+4000);
    $_SESSION['User'] = $_COOKIE['User'];
    header("Location: Menu.php");
  }else{
      session_destroy();
      header("Location: MenuLoginInicio.php");

  }

?>
