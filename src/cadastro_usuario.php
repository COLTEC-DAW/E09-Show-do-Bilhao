<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" type="text/css" rel="stylesheet">
    <title>Cadastro usuário</title>
</head>
<body>
    <form action="handle_cadastro.php" method='post'>

       <label for="nome">Nome: </label>
       <input style="margin: 2px;" id="nome" type="text" name="nome"> <br>
       <label for="email">E-mail:</label>
       <input style="margin: 2px;" type="email" id="email" name="email"> <br>
       <label for="login">Login:</label>
       <input style="margin: 2px;" type="text" id="login" name="login"> <br>
       <label for="senha">Senha:<label>
       <input style="margin: 2px;" type="password" id="senha" name="senha"> 
       <button type="submit">Enviar</button>

    </form>
</body>
</html>
