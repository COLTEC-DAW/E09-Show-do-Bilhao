<?php
  echo '<div class="menu">';

  if(isset($_SESSION['username']))
  {
    echo'
    <form method="post">
      <input class="btn" type="submit" name="logout" value="Sair" />
    </form>';
  }

  echo '</div>';
?>