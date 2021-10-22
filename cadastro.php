<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Real</title>
</head>
<body>

    <div>

    <h3>Faça o cadastro para participar</h3><br><br><br>

    </div>
    <form action="cadastro.php" method="post">

        Nome: <input type="text" name="nome"> <br>
        Login: <input type="text" name="login"> <br>
        Senha: <input type="password" name="senha"> <br>
        Email: <input type="text" name="email"> <br>
        
        <input type="submit" name="logar">

        <?php

            require "classUser.php";

            if(isset($_POST["login"]) && isset($_POST["senha"])){
            
                if(empty($_POST["login"]) || empty($_POST["senha"]) || empty($_POST["email"]) || empty($_POST["nome"])){
                                
                    echo "Insira todos os dados";

                }else{

                    $newUser = new User($_POST["nome"], $_POST["email"], $_POST["login"], $_POST["senha"]);
                
                    
                    if($newUser->cadastra()){
                       
                        header("Location: login.php");

                    }else{

                        echo "Este login já existe";

                    }

                }
        
            }       

        ?>
</form>
</body>
</html>