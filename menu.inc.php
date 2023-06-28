<?php
  echo '<div class="menu">';
  global $atMenu;
  global $loggedIn;

  if($atMenu == true)
  {
    echo'
    <form method="post">
      <input class="btn" type="submit" name="entrar" value="Entrar" />
    </form>';
    echo'
    <form method="post">
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
?>