<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body> 
<div class="container">

<div class="content">

 <div class="title">
     <h1>Cadastro</h1>
 </div>

 <div class="img">
     <img src="imgs/jogo_do_bilhao.png" alt="" srcset="">
 </div>

 <div class="user">

 <form action="testCadastro.php" method="post">
     <label for="login">Username:</label>
     <input type="text" name="login" id="" required>
     <br>
     <label for="password">Password:</label>
     <input type="password" name="password" id="" required>
     <br>
     <label for="password">Nome:</label>
     <input type="text" name="name" id="" required>
     <br>
     <label for="password">Email:</label>
     <input type="email" name="email" id="" required>
     <br>
     <input type="submit" class="submit" value="Cadastrar">
 </form>

 </div>

 </div>

 </div>
</body>
</html>