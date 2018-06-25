<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="/">Show do Milhão</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    </div>
    
  </div>
    <a href="/sair.php" style="<?php
      $sair =  $_COOKIE['sair'];
      if($sair == 0){
        echo "display:none";
      }
    ?>">Sair</a>
</nav>
