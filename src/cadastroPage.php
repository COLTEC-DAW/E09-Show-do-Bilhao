<!DOCTYPE html>
<body>

    <div>
    <h3>Cadastre-se Para Jogar o Show do Bilhão:</h3><br><br><br>

    </div>
    <form action="./cadastroPage.php" method="post">
        Nome: <input type="text" name="Nome" require> <br>
        Login: <input type="text" name="Login" require> <br>
        Email: <input type="text" name="Email" require> <br>
        Senha: <input type="password" name="Senha" require> <br>
        <input type="submit" name="Logar">

        <?php

            require "UsuarioClass.php";

            if(isset($_POST["Login"]) && isset($_POST["Senha"])){

                $novoUsuario = new Usuario ($_POST["Login"], $_POST["Email"], $_POST["Senha"], $_POST["Nome"]);
                if($novoUsuario->cadastrarUsuario()){

                    header("Location: loginPage.php");

                }else{

                    echo "Usuario ja existe !";

                }
                
            }       
        ?>
</form>
</body>
</html> 