<!-- Following Menu -->
<?php 
  session_start();
?>
<div class="ui large bordeless main menu inverted">
  <div class="ui container">
    <a class="item" href="/index.php">Jogo</a>
    <div class="right menu">
      <?php 
        if (isset($_SESSION["login"]) && isset($_SESSION["password"])) { ?>
          <div class='item'>
            <a class='ui' href='/php/profile.php'>Olá, <?= $_SESSION["login"] ?></a>
          </div>
          <div class="item">
            <a class='ui' href='/php/logout.php'>Sair</a>
          </div>
      <?php }
      ?>
      <?php 
      if (!isset($_SESSION["login"]) && !isset($_SESSION["password"])) { ?>
        <div class="item">
          <a class='ui' href='/php/login.php'>Entrar</a>
        </div>
        <div class="item">
          <a class='ui' href='/php/signUp.php'>Cadastrar</a>
        </div>
      <?php } ?>     
    </div>
  </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="index.js"></script>