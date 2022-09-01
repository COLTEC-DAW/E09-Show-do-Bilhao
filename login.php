<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div id="global">
        <header>
            <h1>Login</h1>
        </header>
        <main>
             <form method = "post" action= "autenticador.php">
                <label>Login:
                    <input name="user[login]" type= "text"/>
                </label>   
                <label>Password:
                    <input name="user[senha]" type= "password"/>
                </label>   
                <button type = "submit">Entrar</button>
             </form>
        </main>
    
    
</body>
</html> 