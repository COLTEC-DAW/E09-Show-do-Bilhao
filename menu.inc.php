<?php
  echo '<div class="menu">';
  global $atMenu;
  global $loggedIn;

  if($atMenu == true)
  {
    echo'
    <form action="/login.php" method="post">
      <input class="btn" type="submit" name="entrar" value="Entrar" />
    </form>';
    echo'
    <form action="/singup.php" method="post">
      <input class="btn" type="submit" name="cadastrar" value="Criar Conta" />
    </form>';
  }
  else if($loggedIn == true)
  {
    echo'
    <form method="post">
    <input class="btn" type="submit" name="logout" value="Sair" />
    </form>';

  }
  echo '</div>';
  if($loggedIn == true)
  {
    echo'
    <h1 class="info">Ultimo score: '. $_COOKIE[$_SESSION['username']]. '</h1>
    ';
  }
?>