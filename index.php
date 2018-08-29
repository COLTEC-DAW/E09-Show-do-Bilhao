<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E09</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php
        session_start();
        if(!isset($_SESSION["login"])) {
          header("Location:logIn.php");
        }
        include "menu.inc";
        include "perguntas.inc";
        setcookie("ultimoLogin", date('l jS \of F Y h:i:s A'));
        if(empty($_COOKIE["ultimoLogin"])){
          $ultimoLogin = "Primeira vez por aqui";
        } else {
          $ultimoLogin = $_COOKIE["ultimoLogin"];
        }
        if(empty($_COOKIE["ultimaPontuacao"])){
          $ultimaPontuacao = "0";
        } else {
          $ultimaPontuacao = $_COOKIE["ultimaPontuacao"];
        }
        echo "<h5 class=\"text-center\">Ultimo login: $ultimoLogin</h5>
              <h5>Ultima pontuacao: $ultimaPontuacao</h5>
              <form class=\"form-group\" action=\"logOut.php\" method=\"post\">
                <button class=\"btn-danger btn\" type=\"submit\" name=\"nome\">Log out</button>
              </form>";
        if(!empty($_POST)){
          $resposta = (integer)$_POST["alternativas"];
          $pos = (integer)$_POST["posPergunta"];
          carregaResposta($resposta, $pos);
          carregaPergunta($pos);
        } else {
          carregaPergunta(0);
        }
        include "rodape.inc";
      ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
