<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bem vindo</title>
</head>
<body>
    <?php 
     session_start();
     if (isset($_SESSION["login"])){
             header("Location:perguntas.php");
             exit();
     }else{
         session_destroy();
     }

    include "/Includes/menu.inc" ?>
    <h1 class="text-center">Cadastre-se gratuitamente</h1>
    
    <div class="container">    
        <form class="justify-content-center" action="cadastrando.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
                
            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="Login">
            </div>
                
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <?php include "/Includes/footer.inc" ?>

</body>
</html>
