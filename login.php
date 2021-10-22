<?php

require "classUser.php";
session_start();

if(isset($_POST["login"])){

    $_SESSION["user"] = $_POST["login"];
    $_SESSION["points"] = 0;

}

?>




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

    <h3>Insira login e senha para participar</h3><br><br><br>

    </div>
    <form action = "login.php" method="post">


        Login: <input type="text" name="login"> <br>
        Senha: <input type="password" name="senha"> <br>



        <br><input type="submit" name="logar">

        <?php

                if(isset($_POST["login"]) && isset($_POST["senha"])){
        
                    if(!empty($_POST["login"]) && !empty($_POST["senha"])){
                            
                        echo "Login não existe ou a senha está incorreta";

                    }

                    if(User::validaUser($_POST["login"], $_POST["senha"]) != false){

                        header("Location: questions.php");                        

                    }
    
                }       

        ?>
        


    
    </form>
    <a href = "cadastro.php"><button>Cadastrar</button></a>
    
    

    
</body>

</html>