<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <title>O Show do Bilhão</title>
    </head>

    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                <form action="conf_cadastro.php" method="post">
                    <label for="nome">Nome: </label>
                    <input type="text"name="nome"><br>
                    <label for="email">Email: </label>
                    <input type="text" name="email"><br><br>
                    <label for="login">Login: </label>
                    <input type="text" name="login"><br><br>
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha"><br><br>
                    <input type="submit" value="Submit">
                </form>
                
                </div>
            </div>
        </div>

    </body>
</html>