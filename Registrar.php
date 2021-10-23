<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-image: url(./images/background_jogo.png);">
    
    <div id="container" class="container-xl" ">
        <div id="home" class="col-xl-11 card">

            <div id="Home-title" class="col-xl-7 py-3">
               <h2 id="title" class="col-xl-12 card-title">
                   Registrar
               </h2>
            </div>

            <div id="home-menu" class="col-xl-11 card-body">
                <div id="info" class="col-xl-12">
                <form id="formularioLogin" method="post">
                    <label for="NomeUsuarioLogin">Nome de Usuario:</label> <br>
                    <input type="text" id="NomeUsuarioLogin" name="Nome"> <br>
                    <label for="SenhaLogin" style="margin-top: 20px;">Senha:</label><br>
                    <input type="password" name="Senha" id="SenhaLogin"><br> <br>
                    
                    <input id="submit-Reg" name="submit-Reg" type="submit" class="btn btn-info" value="Criar conta"></input>   
                    
                    <?php

                        require './Assets/Login.php';

                        if(isset($_POST["Nome"]) && isset($_POST["Senha"])){

                        $novoUsuario = new User ($_POST["Senha"], $_POST["Nome"]);
                        if($novoUsuario->cadastrarUsuario()){

                            echo "<script>window.location.replace('./LoginPage.php')</script>";

                        }else{

                            echo "<br><h2>Esse user já existe Bro!</h2>";

                        }

                        }
                    ?>
                </form> 
                </div>
            </div> 
        </div>
    </div>
</body> 
</html>