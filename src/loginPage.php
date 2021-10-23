<?php

    require "./UsuarioClass.php";
    require "./sessão.php";

    if(isset($_GET['sair'])){
        SetCookies();
        session_unset();
        session_destroy();
        header("Location: LoginPage.php");
    }
    elseif(isset($_POST["Login"])){
        $_SESSION["user"] = $_POST["Login"];
        $_SESSION["points"] = 0;
    }
?>

<!DOCTYPE html>
<body>
    <div>
    <h3>Insira Login e Senha para participar. (Caso nao tenha login clique em Cadastrar))</h3><br><br><br>
    </div>
    <form action=" ./loginPage.php" method="post">

        Login: <input type="text" name="Login" required> <br>
        Senha: <input type="password" name="senha" required> <br>
        
    <input type="submit" name="Logar">

    <?php
        if(isset($_POST["Login"]) && isset($_POST["senha"])){

            if(!empty($_POST["Login"]) && !empty($_POST["senha"])){

                echo "Login não existe ou a senha está incorreta";

            }

            if(Usuario::validarUsuario($_POST["Login"], $_POST["senha"]) != false){

                header("Location: ./perguntas.php");                        

            }
        }       
    ?>

    </form>
    <a href = "./cadastroPage.php"><button>Cadastrar</button></a>
</body>
</html> 