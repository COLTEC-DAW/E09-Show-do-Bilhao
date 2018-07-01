<!-- Following Menu -->
<?php 
  session_start();
  $email = $_SESSION["email"];
  $password = $_SESSION["password"];
?>
<div class="ui large top inverted hidden menu">
  <div class="ui container">
    <a class="item" href="/index.php">Jogo</a>
    <div class="right menu">
      <?php 
        if (isset($email) && isset($password)) {
          echo "<div class='item'>";
          echo "<a class='ui' href='/php/profile.php'>Olá, ". $email ."</a>";
          echo "</div>";
        }
      ?>
      <div class="item">
        <?php
          if (!isset($email) && !isset($password)) {
            echo "<a class='ui button' href='/php/login.php'>Entrar</a>";
          } else {
            echo "<a class='ui button' href='/php/logout.php'>Sair</a>";
          }
        ?>
      </div>
    </div>
  </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="index.js"></script>