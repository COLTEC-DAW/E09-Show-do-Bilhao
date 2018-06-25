<!DOCTYPE html>
<?php
    session_destroy();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>
<?php include "./php/partials/_menu.php" ?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Realize Log In Para Jogar</h1>
        <form  action="/index.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control"  placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="passsword" type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include "./php/partials/_rodape.php" ?>
</body>
</html>