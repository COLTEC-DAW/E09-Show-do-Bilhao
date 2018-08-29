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
        include "menu.inc";
      ?>
      <div class="row">
        <form class="col-6 form-group text-center p-4" action="checkUser.php" method="post">
          <input class="col-12 form-control col-4 p-3 mb-3" type="text" name="login" placeholder="Login">
          <input class="col-12 form-control col-4 p-3 mb-3" type="password" name="senha" placeholder="Senha">
          <input class="col-6 btn-success btn p-2" type="submit" value="Log In">
        </form>
        <form class="col-6 form-group text-center p-4" action="cadastro.php" method="post">
          <input class="col-12 form-control col-4 p-3 mb-3" type="text" name="login" placeholder="Login">
          <input class="col-12 form-control col-4 p-3 mb-3" type="password" name="senha" placeholder="Senha">
          <input class="col-12 form-control col-4 p-3 mb-3" type="email" name="email" placeholder="E-mail">
          <input class="col-12 form-control col-4 p-3 mb-3" type="name" name="nome" placeholder="Nome">
          <input class="col-6 btn-success btn p-2" type="submit" value="Cadastrar">
        </form>
      </div>
      <?php include "rodape.inc"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
